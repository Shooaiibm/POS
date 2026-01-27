
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ordermodel extends CI_Model
{ 

    public function getuserwisehead($maxID){
        $userId = $this->session->userdata('user_id');
        //$maxID = $this->session->userdata("PONO");
    $query = $this->db->query("SELECT        tbl_orders.*
    FROM            tbl_orders
    WHERE        (UserID = $userId) AND (OID = $maxID)");
    return $query->result_array();
      }

      
public function updated($CID, $odate, $Origin, $Destination, $Shipper, $barcode, $Remarks, $OID)
{
    // Make sure to escape values properly to avoid SQL injection if you're not using bindings

    // Get user ID and current date
    $userId = $_SESSION['user_id']; // or however you get the logged-in user
    $dateGet = date('Y-m-d H:i:s');

    // Prepare update query
    $query = $this->db->query("
        UPDATE tbl_orders
        SET
            CID = $CID,
            OrderDate = '$odate',
            Description = '$Remarks',
            UserID = $userId,
            EntryDate = '$dateGet',
            Origin = '$Origin',
            Destination = '$Destination',
            Shipper = '$Shipper',
            Barcode = '$barcode'
        WHERE OID = $OID
    ");

    return true;
}

public function updatebarcode($CID, $Newbarcode)
{
    // Make sure to escape values properly to avoid SQL injection if you're not using bindings

    // Get user ID and current date
    $userId = $_SESSION['user_id']; // or however you get the logged-in user
    $dateGet = date('Y-m-d H:i:s');

    // Prepare update query
    $query = $this->db->query("
        UPDATE tbl_orders
        SET
          
                       Barcode = '$Newbarcode'        WHERE OID = $CID
    ");

    return true;
}

public function Scaning($orderNumber, $deliveryStatus)
{
    $userId = $_SESSION['user_id'];  // Get the logged-in user ID
    $dateGet = date('Y-m-d');  // Get the current date and time

    // Check if the barcode exists
    $query = $this->db->get_where('tbl_orders', ['Barcode' => $orderNumber]);
    if ($query->num_rows() == 0) {
        return 'Barcode Not Found';  // Barcode not found
    }

    // Check if the order is already delivered or returned
    $order = $query->row();
    if($deliveryStatus == 1){
        if (($order->DeliverStatus == 1)) {
            return 'Order Already Delivered';  // Already scanned
        }
    }
    else{
        if (($order->ReturnStatus == 1)) {
            return 'Order Already Returned';  // Already scanned
        }
    }
   
    

    // Proceed with updating the status based on deliveryStatus
    if ($deliveryStatus == 1) {
        // Update DeliverStatus and add the user ID and current date
        $this->db->query("
            UPDATE tbl_orders
            SET DeliverStatus = 1, DeliverStatusBy = ?, DeliverDate = ?
            WHERE Barcode = ?
        ", array($userId, $dateGet, $orderNumber));
        return 'Order Delivered Successfully!'; 
    } elseif ($deliveryStatus == 2) {
        // Update ReturnStatus and add the user ID and current date for Return
        $this->db->query("
            UPDATE tbl_orders
            SET DeliverStatus = 0,ReturnStatus = 1, ReturnStatusBy = ?, ReturnStatusDate = ?
            WHERE Barcode = ?
        ", array($userId, $dateGet, $orderNumber));
        return 'Order Returned Successfully!';
    }

    
}
public function uscanned($id){
    $query = $this->db->query("UPDATE tbl_orders
            SET ReturnStatus = 0, ReturnStatusBy = Null, ReturnStatusDate = Null,DeliverStatus = 0, DeliverStatusBy = Null, DeliverDate = Null
            WHERE OID = $id");
    return true;
  }
  public function Stockbalance($CatID) {
   

    $query = $this->db->query("
        SELECT view_in.CATNAme, view_in.Name, view_in.Quantity,
               ISNULL(View_out.out, 0) AS out,
               view_in.Quantity - ISNULL(View_out.out, 0) AS Balance
        FROM view_in
        LEFT OUTER JOIN View_out
            ON view_in.ItemID = View_out.ITEMID AND view_in.CatID = View_out.CATID
        WHERE view_in.CatID = $CatID" );

        return $query->result_array();
}
public function invtnrotyBalance() {
    

    $query = $this->db->query("
    SELECT        view_balance.*
    FROM            view_balance" );

        return $query->result_array();
}
public function AddOrder_head($EIMI, $odate, $purchasePrice, $salesprice, $IID, $qty)
{
    // Check if EMINO already exists
   
    // ✅ Fetch CatID using ITEMID from tbl_items
    $item = $this->db->get_where('view_stock_inventory', ['ITID' => $IID])->row();
   
    $CatID = $item->CAtID;
    $userId = $_SESSION['user_id'];

    // Insert into Store_inwardtransaction
    $this->db->insert('store_inwardtransaction', [
        'EMINO' => $EIMI,
        'Date' => $odate,
        'PurchasePrice' => $purchasePrice,
        'SalesPrices' => $salesprice,
        'ITEMID' => $IID,
        'CatID' => $CatID,
        'Quantity' => $qty,
        'userID' => $userId,
        'EntryDate' => date('Y-m-d H:i:s')
    ]);

    return ['status' => 'success', 'message' => 'Item inwarded successfully.'];
}

public function AddOrder_headgeneration($odate, $purchasePrice, $salesprice, $IID, $qty)
{
  
  
    // ✅ Fetch CatID using ITEMID from tbl_items
    $item = $this->db->get_where('view_stock_inventory', ['ITID' => $IID])->row();
   
    $CatID = $item->CAtID;
    $userId = $_SESSION['user_id'];
$amount=$qty*$salesprice;
    // Insert into Store_inwardtransaction
    $this->db->insert('tbl_orders', [
        'Date' => $odate,
        'PurchasePrice' => $purchasePrice,
        'SalesPrices' => $salesprice,
        'ITEMID' => $IID,
        'CatID' => $CatID,
        'amount' => $amount,
        'Quantity' => $qty,
        'userID' => $userId,
        'EntryDate' => date('Y-m-d H:i:s'),
        'instatus'=>0
    ]);

    return ['status' => 'success', 'message' => 'Order placed successfully.'];
}

  public function AddOUT($EIMI, $odate, $PPU,$CID, $Name, $barcode, $qty)
  {
      // Check if EMINO and BarCode combination already exists
      $existsEMINO = $this->db->get_where('store_outwardtransaction_manual', [
        'EMINO' => $EIMI,
       
    ])->row();

    if ($existsEMINO) {
        return ['status' => 'error', 'message' => 'Duplicate EMINO entry not allowed.'];
    }
    $existsbarcode = $this->db->get_where('store_outwardtransaction_manual', [
      
      'BarCode' => $barcode
  ])->row();

  if ($existsbarcode) {
      return ['status' => 'error', 'message' => 'Duplicate Barcode entry not allowed.'];
  }
      $userId = $_SESSION['user_id'];
      // Insert into database (simplified here for example)
      $this->db->insert('store_outwardtransaction_manual', [
          'EMINO' => $EIMI,
          'Date' => $odate,
          'PPU' => $PPU,
          'CID' => $CID,
          'Name' => $Name,
          'BarCode' => $barcode,
          'Quantity' => $qty,
          'userID' => $userId,
          'EntryDate' => date('Y-m-d H:i:s'),
          'lockstatus' => 0
      ]);
  
      return ['status' => 'success', 'message' => 'Item inwarded successfully.'];
  }
  

public function view_orders($odate,$enddata)
{
$query = $this->db->query("SELECT        view_inward_items.*
FROM            view_inward_items
where Date Between '$odate' and '$enddata'");
return $query->result_array();
}

public function view_ordersnew($odate,$enddata)
{
$query = $this->db->query("SELECT        view_order_inward.*
FROM            view_order_inward
where Date Between '$odate' and '$enddata'");
return $query->result_array();
}


public function store_outwardtransaction_manual()
{
$query = $this->db->query("SELECT        id, Quantity, Date, UserID, EntryDate, barcode, EMINO, CID, lockstatus, INVNO, PPU, Name
FROM            store_outwardtransaction_manual
WHERE        (lockstatus = 0)");
return $query->result_array();
}
public function view_inv_Details($odate, $enddata)
{
    $sql = "SELECT view_inv_details.*
            FROM view_inv_details
            WHERE Date BETWEEN ? AND ?
            ORDER BY INVNO DESC";

    $query = $this->db->query($sql, array($odate, $enddata));
    return $query->result_array();
}


public function view_inv_Details_new($odate, $enddata, $SalesMan)
{
    // Base query
    $sql = "SELECT view_inv_details_new.* 
            FROM view_inv_details_new 
            WHERE Date BETWEEN '$odate' AND '$enddata'";

    // Add SalesMan filter if not "ALL"
    if ($SalesMan !== "ALL") {
        $sql .= " AND SalesMan = '$SalesMan'";
    }

    // Execute the query
    $query = $this->db->query($sql);
    return $query->result_array();
}


public function view_inv_Detailsout($odate,$enddata)
{
$query = $this->db->query("SELECT        view_invoice_Manual_INV.*
FROM            view_invoice_Manual_INV
where (Date Between '$odate' and '$enddata')");
return $query->result_array();
}

public function view_ordersoutward()
{

   
    
$query = $this->db->query("SELECT        vie_outward_transaction.*
FROM            vie_outward_transaction");
return $query->result_array();
}
// public function updateInvoiceHead($InvoiceID, $CID, $Date, $paymentType, $SalesMan)
// {
//     $data = array(
//         'CID'         => $CID,
//         'Date'        => $Date,
//         'paymentType' => $paymentType,
//         'SalesMan'    => $SalesMan
//     );

//     $this->db->where('INVNo', $InvoiceID);
//     return $this->db->update('store_invoice_head', $data);
// }
public function updateInvoiceData($INVNo, $CID, $paymentDate, $paymentType, $SalesMan)
{
    // Start transaction to ensure both tables update together
    $this->db->trans_start();

    // ✅ Update store_invoice_head
    $this->db->where('INVNo', $INVNo);
    $this->db->update('store_invoice_head', [
        'CID'         => $CID,
        'Date'        => $paymentDate,
        'paymentType' => $paymentType,
        'SalesMan'    => $SalesMan
    ]);

    // ✅ Update store_outwardtransaction (only Date for same INVNo)
    $this->db->where('INVNo', $INVNo);  // Make sure column name matches your DB schema
    $this->db->update('store_outwardtransaction', [
        'Date' => $paymentDate
    ]);

    $this->db->trans_complete();

    return $this->db->trans_status();
}
public function view_ordersoutwardedit($id)
{

   
    
$query = $this->db->query("SELECT        invoice_transactions.*
FROM            invoice_transactions where INVNO = $id ");
return $query->result_array();
}

public function loadscanning($deliveryStatus)
{ $dateGet = date('Y-m-d');

    if($deliveryStatus==1){
        $query = $this->db->query("SELECT *
        FROM view_orders
        where DeliverDate='$dateGet'");
        return $query->result_array();
        }
        
      else if($deliveryStatus==2){
        $query = $this->db->query("SELECT *
FROM view_orders
where ReturnStatusDate='$dateGet'");
return $query->result_array();
}

    }

    public function loadpayment($deliveryStatus,$stardate,$enddate)
    { $dateGet = date('Y-m-d');
    
        if($deliveryStatus==1){
            $query = $this->db->query("SELECT *
            FROM view_order_head
            where PaymentStatus=0 and (OrderDate BETWEEN CONVERT(DATETIME, '$stardate 00:00:00', 102) AND CONVERT(DATETIME, '$enddate 00:00:00', 102))");
            return $query->result_array();
            }
            
          else if($deliveryStatus==2){
            $query = $this->db->query("SELECT *
    FROM view_order_head
    where PaymentStatus=1 and (OrderDate BETWEEN CONVERT(DATETIME, '$stardate 00:00:00', 102) AND CONVERT(DATETIME, '$enddate 00:00:00', 102))");
    return $query->result_array();
    }
    
        }
    

        public function undoprd($id) {
            $this->db->where('id', $id);
            $this->db->where('outstatus', null);
            $this->db->delete('store_inwardtransaction');
        
            if ($this->db->affected_rows() > 0) {
                return ['status' => true, 'message' => 'Record deleted successfully.'];
            } else {
                return ['status' => false, 'message' => "Deletion failed: Either record doesn't exist or 'outstatus' is not NULL."];
            }
        }
        
        public function undoprdorder($id) {
            $this->db->where('OID', $id);
          
            $this->db->delete('tbl_orders');
        
            if ($this->db->affected_rows() > 0) {
                return ['status' => true, 'message' => 'Record deleted successfully.'];
            } 
        }
        
        

public function undoprdoutward($id){
    $query = $this->db->query("DELETE FROM store_outwardtransaction
    WHERE        (id = $id)");
    return true;
 
}
public function undoinvoice($id){
     $query = $this->db->query("DELETE FROM store_invoice_head
    WHERE        (INVNo = $id)");
    $query = $this->db->query("DELETE FROM store_outwardtransaction
    WHERE        (INVNO = $id)");
   
    return true;
 
}
public function undoprdoutwardout($id){
    $query = $this->db->query("DELETE FROM store_outwardtransaction_manual
    WHERE        (id = $id)");
    return true;
 
}

public function undoprdhead($id){
    $query = $this->db->query("DELETE FROM tbl_orders
    WHERE        (OID = $id)");
    return true;
 
}
public function OrderHeads($starDate,$Enddate){
    $userId = $this->session->userdata('user_id');
    //$maxID = $this->session->userdata("PONO");
$query = $this->db->query("SELECT        view_order_head.*
FROM            view_order_head
WHERE        (OrderDate BETWEEN CONVERT(DATETIME, '$starDate 00:00:00', 102) AND CONVERT(DATETIME, '$Enddate 00:00:00', 102))");
return $query->result_array();
  }
  
  public function tbl_Catagory(){
$query = $this->db->query(" SELECT tbl_Catagory.*
  FROM     tbl_Catagory
  WHERE  (Status = 1)");
return $query->result_array();
  }
  
public function ScanningData($barcode, $CID)
{
    // Echo $barcode;
    // die;
    // Step 1: Lookup item by barcode
    $query = $this->db->get_where('view_stock_inventory', ['BarCode' => $barcode]);
    $inwardData = $query->row();

    // if (!$inwardData) {
    //     return ['status' => 'error', 'message' => 'Item not found in inventory.'];
    // }

    // Step 2: Check lock status for other client
    $this->db->where('lockstatus', 0);
    $this->db->where('EMINO', $barcode);
    $this->db->where('CID !=', $CID);
    $conflict = $this->db->get('store_outwardtransaction')->row();

    if ($conflict) {
        return ['status' => 'error', 'message' => 'Kindly select the correct client.'];
    }

    // Step 3: Check stock balance
    $balanceCheck = $this->db
        ->select('ITEMID, Balance')
        ->get_where('view_balance', ['ITEMID' => $inwardData->ITID])
        ->row();

    if (!$balanceCheck || $balanceCheck->Balance <= 0) {
        return ['status' => 'error', 'message' => 'No available stock.'];
    }

    // Step 4: Calculate discount
    $originalPrice   = $inwardData->Salesprice;
    $discountPercent = $inwardData->Discount;
    $discountAmount  = ($originalPrice * $discountPercent) / 100;
    $finalPrice      = $originalPrice - $discountAmount;

    // Step 5: Prepare data to insert
    $data = [
        'Quantity'        => 1,
        'ITEMID'          => $inwardData->ITID,
        'Date'            => date('Y-m-d'),
        'INID'            => $inwardData->ITID,
        'CATID'           => $inwardData->CAtID,
        'EMINO'           => $inwardData->BarCode,
        'SalesPrices'     => $inwardData->Salesprice,          // Original price
        'PurchasePrice'   => $inwardData->PurchasePrice,
        'Discount'        => $discountAmount,        // Discount in percentage
        'Amount'          => $finalPrice,         // Discount amount only
        'DICprec'         => $discountPercent,          // Original price again
        'userID'          => $this->session->userdata('user_id'),
        'EntryDate'       => date('Y-m-d H:i:s'),
        'CID'             => $CID,
        'lockstatus'      => 0,
        'Year'            => date('Y'),
    ];

    // Step 6: Insert into database
    $inserted = $this->db->insert('store_outwardtransaction', $data);

    if (!$inserted) {
        return ['status' => 'error', 'message' => 'Insertion failed.'];
    }

    return ['status' => 'success', 'message' => 'Item successfully moved to outward.'];
}

  
  public function Scaningviaitem($IIDoutward, $CID)
{
    // Step 1: Lookup item by barcode in inward
    $query = $this->db->get_where('view_stock_inventory', ['ITID' => $IIDoutward]);
    $inwardData = $query->row();

    if (!$inwardData) {
        return ['status' => 'error', 'message' => 'Item not found in inventory.'];
    }

    // Step 2: Check if same item is locked under a different client
    $this->db->where('lockstatus', 0);
    $this->db->where('ITEMID', $IIDoutward);
    $this->db->where('CID !=', $CID);
    $conflict = $this->db->get('store_outwardtransaction')->row();

    if ($conflict) {
        return ['status' => 'error', 'message' => 'Kindly select the correct client.'];
    }

    // Step 3: Check balance
    $balanceCheck = $this->db
        ->select('ITEMID, Balance')
        ->get_where('view_balance', ['ITEMID' => $IIDoutward])
        ->row();

    if (!$balanceCheck || $balanceCheck->Balance <= 0) {
        return ['status' => 'error', 'message' => 'No available stock.'];
    }

    if ($inwardData->Salesprice == 0) {
        return ['status' => 'error', 'message' => 'Rate is not Define'];
    }

    // Discount is already in percent
    $discountPercent = $inwardData->Discount;
    $discountAmount = ($inwardData->Salesprice * $discountPercent) / 100;
    $amount = $inwardData->Salesprice - $discountAmount;

    $data = [
        'Quantity'        => 1,
        'ITEMID'          => $IIDoutward,
        'Date'            => date('Y-m-d'),
        'INID'            => $IIDoutward,
        'CATID'           => $inwardData->CAtID,
        'EMINO'           => $inwardData->BarCode,
        'SalesPrices'     => $inwardData->Salesprice,
        'PurchasePrice'   => $inwardData->PurchasePrice,
        'Discount'        => round($discountAmount, 2),          // Discount amount in Rs
        'DICprec'         => round($discountPercent, 2),         // Discount in %
        'userID'          => $this->session->userdata('user_id'),
        'EntryDate'       => date('Y-m-d H:i:s'),
        'CID'             => $CID,
        'lockstatus'      => 0,
        'Year'            => date('Y'),
        'Amount'          => round($amount, 2)                   // Final amount after discount
    ];

    $inserted = $this->db->insert('store_outwardtransaction', $data);

    if (!$inserted) {
        return ['status' => 'error', 'message' => 'Insertion failed.'];
    }

    return ['status' => 'success', 'message' => 'Item successfully moved to outward.'];
}

  
  public function Scaningviaitemedit($IIDoutward, $CID,$invoiceID,$HID)
{
    // Step 1: Lookup item by barcode in inward
    $query = $this->db->get_where('view_stock_inventory', ['ITID' => $IIDoutward]);
    $inwardData = $query->row();

    if (!$inwardData) {
        return ['status' => 'error', 'message' => 'Item not found in inventory.'];
    }

    // // Step 2: Check if same item is locked under a different client
    // $this->db->where('lockstatus', 0);
    // $this->db->where('ITEMID', $IIDoutward);
    // $this->db->where('CID !=', $CID);
    // $conflict = $this->db->get('store_outwardtransaction')->row();

    // if ($conflict) {
    //     return ['status' => 'error', 'message' => 'Kindly select the correct client.'];
    // }

    // Step 3: Check balance
    $balanceCheck = $this->db
        ->select('ITEMID, Balance')
        ->get_where('view_balance', ['ITEMID' => $IIDoutward])
        ->row();

    if (!$balanceCheck || $balanceCheck->Balance <= 0) {
        return ['status' => 'error', 'message' => 'No available stock.'];
    }

    if ($inwardData->Salesprice == 0) {
        return ['status' => 'error', 'message' => 'Rate is not Define'];
    }

    // Discount is already in percent
    $discountPercent = $inwardData->Discount;
    $discountAmount = ($inwardData->Salesprice * $discountPercent) / 100;
    $amount = $inwardData->Salesprice - $discountAmount;

    $data = [
        'Quantity'        => 1,
        'ITEMID'          => $IIDoutward,
        'INVNO'          => $invoiceID,
        'HID'            => $HID,
        'Date'            => date('Y-m-d'),
        'INID'            => $IIDoutward,
        'CATID'           => $inwardData->CAtID,
        'EMINO'           => $inwardData->BarCode,
        'SalesPrices'     => $inwardData->Salesprice,
        'PurchasePrice'   => $inwardData->PurchasePrice,
        'Discount'        => round($discountAmount, 2),          // Discount amount in Rs
        'DICprec'         => round($discountPercent, 2),         // Discount in %
        'userID'          => $this->session->userdata('user_id'),
        'EntryDate'       => date('Y-m-d H:i:s'),
        'CID'             => $CID,
        'lockstatus'      => 1,
        'Year'            => date('Y'),
        'Amount'          => round($amount, 2)                   // Final amount after discount
    ];

    $inserted = $this->db->insert('store_outwardtransaction', $data);

    if (!$inserted) {
        return ['status' => 'error', 'message' => 'Insertion failed.'];
    }

    return ['status' => 'success', 'message' => 'Item successfully moved to outward.'];
}

  
  
public function updateOutwardQuantity($TID, $ITID, $Quantity, $SalesPrices,$DICprec)
{
    // 1. Validate input
    if (!$TID || !$ITID || !$Quantity || $Quantity <= 0 || !$SalesPrices || $SalesPrices <= 0) {
        return [
            'status' => 'error',
            'message' => 'Invalid input.'
        ];
    }

    // 2. Check available stock
    $balanceCheck = $this->db
        ->select('ITEMID, Balance')
        ->get_where('view_balance', ['ITEMID' => $ITID])
        ->row();

    if (!$balanceCheck) {
        return [
            'status' => 'error',
            'message' => 'Item not found in balance view.'
        ];
    }

    if ($balanceCheck->Balance < $Quantity) {
        return [
            'status' => 'error',
            'message' => 'Not enough stock. Available: ' . $balanceCheck->Balance
        ];
    }

    // 3. Calculate Amount
    
    $Amount = $SalesPrices * $Quantity;
$discountPercent = $DICprec;
    $discountAmount = ($SalesPrices * $discountPercent) / 100;
    $amountnew = $Amount - $discountAmount;
    // 4. Update the quantity and amount
    $this->db->where('id', $TID);
    $updated = $this->db->update('store_outwardtransaction', [
        'Quantity' => $Quantity,
        'Amount'   => $amountnew,
        'SalesPrices' => $SalesPrices,'DICprec'=>$discountPercent ,'Discount'=>$discountAmount// optional: only include if you also want to update it
    ]);

    if (!$updated) {
        return [
            'status' => 'error',
            'message' => 'Update failed.'
        ];
    }

    return [
        'status' => 'success',
        'message' => 'Quantity and amount updated successfully.'
    ];
}


  
  
  public function generateInvoiceForClient($CID, $discountPercent, $received, $Balance,$paymentType,$SalesMan)
  {
      $dateToday = date('Y-m-d');
  
      // Step 1: Get next INVNO
      $this->db->select_max('INVNO');
      $maxRow = $this->db->get('store_outwardtransaction')->row();
      $nextINVNO = ($maxRow && $maxRow->INVNO) ? $maxRow->INVNO + 1 : 1;
  
      // Step 2: Fetch matching unlocked records
      $this->db->where('CID', $CID);
      $this->db->where('Date', $dateToday);
      $this->db->where('lockstatus', 0);
      $records = $this->db->get('store_outwardtransaction')->result();
  
      if (empty($records)) {
          return ['status' => false, 'message' => 'No unlocked records found for this client.'];
      }
  
      // Step 3: Calculate totals
      $totalAmount = 0;
      $totalQty = 0;
  
      foreach ($records as $row) {
          $price = $row->Amount ?? 0;
          //$discount = $row->Discount ?? 0;
          $netPrice = $price;
          $totalAmount += $netPrice;
          $totalQty += $row->Quantity;
      }
  
      // Step 4: Apply discount percent
      $discountPercent = floatval($discountPercent);
      $discountAmount = $totalAmount * ($discountPercent / 100);
      $grandTotal = $totalAmount - $discountAmount;
  
      // Step 5: Insert into store_invoice_head
      $invoiceHead = [
          'CID'             => $CID,
          'Date'            => $dateToday,
          'TotalQty'        => $totalQty,
          'Amount'          => $totalAmount,
          'DiscountPercent' => $discountPercent,
          'DiscountAmount'  => $discountAmount,
          'GrandTotal'      => $grandTotal,
          'INVNO'           => $nextINVNO,
          'CreatedBy'       => $this->session->userdata('user_id'),
          'CreatedAt'       => date('Y-m-d H:i:s'),
          'received'       => $received,
          'balance'       => $Balance,
          'paymentType'     => $paymentType,
        'SalesMan'        => $SalesMan
      ];
      $this->db->insert('store_invoice_head', $invoiceHead);
      $HID = $this->db->insert_id(); // Get inserted HID
  
      // Step 6: Update outward transactions
      $this->db->where('CID', $CID);
      $this->db->where('Date', $dateToday);
      $this->db->where('lockstatus', 0);
      $this->db->update('store_outwardtransaction', [
          'lockstatus' => 1,
          'INVNO'      => $nextINVNO,
          'HID'        => $HID
      ]);
  
      return ['status' => true, 'message' => "Invoice generated with INVNO: $nextINVNO"];
  }
  

public function generateInvoiceForClientout($CID)
{$dateGet = date('Y-m-d');
    // Get max INVNO
    $this->db->select_max('INVNO');
    $maxRow = $this->db->get('store_outwardtransaction_manual')->row();
    $nextINVNO = ($maxRow && $maxRow->INVNO) ? $maxRow->INVNO + 1 : 1;

    // Filter records
    $this->db->where('CID', $CID);
    $this->db->where('Date', $dateGet);
    $this->db->where('lockstatus', 0);
    $query = $this->db->get('store_outwardtransaction_manual');

    if ($query->num_rows() == 0) {
        return ['status' => false, 'message' => 'No matching unlocked records found.'];
    }

    // Update records
    $this->db->where('CID', $CID);
    $this->db->where('Date', $dateGet);
    $this->db->where('lockstatus', 0);
    $this->db->update('store_outwardtransaction_manual', [
        'lockstatus' => 1,
        'INVNO' => $nextINVNO
    ]);

    return ['status' => true, 'message' => 'Invoice generated with INVNO: ' . $nextINVNO];
}


public function Getinvoice()
{
    // Get the maximum invoice number
    $query = $this->db->query("SELECT MAX(INVNO) AS INVNO FROM store_outwardtransaction");
    $MaxOrderNO = $query->result_array();

    // Make sure a result was returned
    if (!empty($MaxOrderNO[0]['INVNO'])) {
        $OrderNO = $MaxOrderNO[0]['INVNO'];

        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM view_invoice WHERE INVNO = ?", [$OrderNO]);
        return $query1->result_array();
    } else {
        return []; // Return empty if no invoice found
    }
}
public function Getinvoiceout()
{
    // Get the maximum invoice number
    $query = $this->db->query("SELECT MAX(INVNO) AS INVNO FROM store_outwardtransaction_manual");
    $MaxOrderNO = $query->result_array();

    // Make sure a result was returned
    if (!empty($MaxOrderNO[0]['INVNO'])) {
        $OrderNO = $MaxOrderNO[0]['INVNO'];

        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM view_invoice_Manual WHERE INVNO = ?", [$OrderNO]);
        return $query1->result_array();
    } else {
        return []; // Return empty if no invoice found
    }
}



public function Getinvoiceinv($invno)
{
    // Get the maximum invoice number
  
        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM view_invoice WHERE INVNO = ?", [$invno]);
        return $query1->result_array();
    
}
public function Getinvoiceinvout($invno)
{
    // Get the maximum invoice number
  
        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM view_invoice_Manual_INV WHERE INVNO = ?", [$invno]);
        return $query1->result_array();
    
}
  public function getMaxOrderNo()
{
$query = $this->db->query("select Max(OrderNO) as OrderNO  from tbl_orders");
$MaxOrderNO = $query->result_array();

$OrderNO = 1;
if(count($MaxOrderNO)>0){
    if($MaxOrderNO[0]['OrderNO'] != null){
        $OrderNO = (int)$MaxOrderNO[0]['OrderNO']+1;
    }
 
}
return $OrderNO;
}
public function getOpeningBalance($itemID, $startDate)
{
    $in = $this->db->select_sum('Quantity')
        ->where('ITEMID', $itemID)
        ->where('Date <', $startDate)
        ->get('store_inwardtransaction')
        ->row()->Quantity ?? 0;

    $out = $this->db->select_sum('Quantity')
        ->where('ITEMID', $itemID)
        ->where('Date <', $startDate)
        ->get('store_outwardtransaction')
        ->row()->Quantity ?? 0;

    return floatval($in) - floatval($out);
}

public function getGroupedTransactions($itemID, $startDate, $endDate)
{
    // Get IN transactions
    $inwards = $this->db->select("Date, SUM(Quantity) as Quantity")
        ->from('store_inwardtransaction')
        ->where('ITEMID', $itemID)
        ->where('Date >=', $startDate)
        ->where('Date <=', $endDate)
        ->group_by('Date')
        ->get()->result_array();

    foreach ($inwards as &$in) {
        $in['Type'] = 'IN';
    }

    // Get OUT transactions
    $outwards = $this->db->select("Date, SUM(Quantity) as Quantity")
        ->from('store_outwardtransaction')
        ->where('ITEMID', $itemID)
        ->where('Date >=', $startDate)
        ->where('Date <=', $endDate)
        ->group_by('Date')
        ->get()->result_array();

    foreach ($outwards as &$out) {
        $out['Type'] = 'OUT';
    }

    // Merge & sort
    $combined = array_merge($inwards, $outwards);
    usort($combined, function ($a, $b) {
        return strtotime($a['Date']) - strtotime($b['Date']);
    });

    // Group & balance
    $grouped = [];
    foreach ($combined as $entry) {
        $date = $entry['Date'];
        if (!isset($grouped[$date])) {
            $grouped[$date] = [
                'Date' => $date,
                'in_qty' => 0,
                'out_qty' => 0
            ];
        }
        if ($entry['Type'] === 'IN') {
            $grouped[$date]['in_qty'] += $entry['Quantity'];
        } else {
            $grouped[$date]['out_qty'] += $entry['Quantity'];
        }
    }

    // Fetch product name
   $product = $this->db->select('Name, ColorName, SizeName')
    ->where('ITID', $itemID)
    ->get('view_stock_inventory')
    ->row();

if ($product) {
    // Concatenate Name, ColorName, and SizeName with spaces
    $productName = trim($product->Name 
                    . ' ' . $product->ColorName 
                    . ' ' . $product->SizeName);
} else {
    $productName = 'Unknown';
}
    // Running balance
    $running_balance = $this->getOpeningBalance($itemID, $startDate);
    $final = [];

    foreach ($grouped as $date => $row) {
        $running_balance += $row['in_qty'] - $row['out_qty'];
        $row['balance'] = $running_balance;
        $row['Name'] = $productName;
        $final[] = $row;
    }

    return $final;
}

    
    public function loadexpcatagory()
{
    // Get the maximum invoice number
  
        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM ExpCatagory");
        return $query1->result_array();
    
}
    public function loadexpactivecatagory()
{
    // Get the maximum invoice number
  
        // Fetch invoice details
        $query1 = $this->db->query("SELECT * FROM ExpCatagory where Status =1");
        return $query1->result_array();
    
}

public function insertExpenseValue($EXCID, $Amount, $UserID, $EntryDate, $Date)
{
     $userId = $this->session->userdata('user_id');
    $dateGet = date('Y-m-d H:i:s');
    $data = array(
        'EXCID' => $EXCID,
        'Amount' => $Amount,
        'UserID' => $userId,
        'EntryDate' => $dateGet,
        'Date' => $Date
    );

    $this->db->insert('expensValue', $data);
}


public function loadexp($startDate, $endDate)
{
    $sql = "SELECT expensValue.*, ExpCatagory.Name AS CategoryName
            FROM expensValue
            JOIN ExpCatagory ON expensValue.EXCID = ExpCatagory.EXCID
            WHERE expensValue.Date BETWEEN ? AND ?";
    
    $query = $this->db->query($sql, array($startDate, $endDate));
    return $query->result_array();
}

public function AddExpCatagory($Name, $Status)
{
    $userId = $this->session->userdata('user_id');
    $dateGet = date('Y-m-d H:i:s');

    $sql = "INSERT INTO ExpCatagory (Name, Status) VALUES (?, ?)";
    $this->db->query($sql, array($Name, $Status));

    return true;
}

public function editExpCatagory($id)
{
    $query = $this->db->query("SELECT * FROM ExpCatagory where EXCID =$id");
    return $query->result_array();
}
public function Editexpense($id)
{
    $query = $this->db->query("SELECT * FROM expensValue where TID =$id");
    return $query->result_array();
}

public function updateEXPCategory($Name, $Status, $id)
{
    $userId = $this->session->userdata('user_id');
    $dateGet = date('Y-m-d H:i:s'); // Correct time format

    $sql = "UPDATE ExpCatagory SET Name = ?, Status = ? WHERE EXCID = ?";
    $this->db->query($sql, array($Name, $Status, $id));

    return true;
}
public function updateExpenseValue($TID, $EXCID, $Amount, $UserID, $EntryDate, $Date)
{
    $data = array(
        'EXCID' => $EXCID,
        'Amount' => $Amount,
        'Date' => $Date
    );

    $this->db->where('TID', $TID);
    $this->db->update('expensValue', $data);
}


}
?>
