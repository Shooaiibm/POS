
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsModel extends CI_Model
{
public function loadItems()
{
$query = $this->db->query("SELECT     tbl_items.ItemID, tbl_items.CatID, tbl_items.Code, tbl_items.Name, tbl_items.SalePrice, tbl_items.purchasePrice, tbl_items.image, tbl_items.status, tbl_catagory.Name AS CatName, tbl_items.Color, 
                         tbl_items.Spece
FROM            tbl_items INNER JOIN
                         tbl_catagory ON tbl_items.CatID = tbl_catagory.CatID");
return $query->result_array();
}

public function loadItemscolor()
{
$query = $this->db->query("SELECT CID, ColorName, ITEMID, ItemName, userID
FROM     tbl_color");
return $query->result_array();
}
public function loaditemsize()
{
$query = $this->db->query("SELECT  SID, SizeName, ITEMID, ItemeName, userID
FROM     tbl_size");
return $query->result_array();
}


public function addItems($CatID,$Code,$Name,$status)
{
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_items (CatID,Code,Name,status) VALUES 
($CatID,'$Code','$Name',$status)");
return true;
}
public function addItemsprd($Code, $SalePrice, $Discount, $purchasePrice, $status)
{
    // 1. Fetch category
    $item = $this->db->get_where('tbl_items', ['ItemID' => $Code])->row();
    
    if (!$item) {
        return ['success' => false, 'message' => 'Item not found in master items table'];
    }
    
    $CatID = $item->CatID;

    // 2. Check if item already exists in stock_details with same CatID
    $this->db->where('ITEMID', $Code);
    $this->db->where('CAtID', $CatID);
    $existing_item = $this->db->get('tbl_stock_details')->row();
    
    if ($existing_item) {
        return ['success' => false, 'message' => 'Item with this Code and Category already exists in stock'];
    }

    // 3. Prepare data and insert
    $userId  = $this->session->userdata('user_id');
    $dateGet = date('Y-m-d H:i:s');

    $data = [
        'CAtID'         => $CatID,
        'ITEMID'        => $Code,
        'Salesprice'    => $SalePrice,
        'PurchasePrice' => $purchasePrice,
        'status'        => $status,
        'userID'        => $userId,
        'entryDate'     => $dateGet,
        'Discount'      => $Discount
    ];

    // 4. Insert into table
    $this->db->insert('tbl_stock_details', $data);

    // 5. Get the newly inserted record's primary key (ITID)
    $ITID = $this->db->insert_id();

    // 6. Generate a 13-digit barcode
    $fixed = 
        str_pad(substr($CatID, 0, 2), 2, '0', STR_PAD_LEFT) .
        str_pad(substr($Code, 0, 4), 4, '0', STR_PAD_LEFT);

    // Make sure fixed part is exactly 10 characters
    $fixed = substr($fixed, 0, 10);

    // 7. Add 3-digit random number and ensure uniqueness
    $attempts = 0;
    $maxAttempts = 10;
    
    do {
        $random = random_int(0, 999);
        $randPart = str_pad($random, 3, '0', STR_PAD_LEFT);
        $barcode = $fixed . $randPart;

        // Final safety guard to ensure length is exactly 13
        $barcode = substr($barcode, 0, 13);

        // Check uniqueness
        $exists = $this->db
            ->where('BarCode', $barcode)
            ->count_all_results('tbl_stock_details') > 0;

        $attempts++;
        
        if ($attempts >= $maxAttempts) {
            // If can't find unique barcode after max attempts, use ITID
            $barcode = str_pad($ITID, 13, '0', STR_PAD_LEFT);
            break;
        }

    } while ($exists);

    // 8. Update the record with the barcode
    $this->db
         ->where('ITID', $ITID)
         ->update('tbl_stock_details', ['BarCode' => $barcode]);

    return ['success' => true, 'message' => 'Item added successfully', 'barcode' => $barcode];
}
public function AddItemscolors($Code,$Name,$color)
{
  $useID=  $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_color (ITEMID,ItemName,ColorName,userID) VALUES 
($Code,'$Name','$color',$useID)");
return true;
}



public function AddItemssize($Code,$Name,$color)
{
  $useID=  $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_size (ITEMID,ItemeName,SizeName,userID) VALUES 
($Code,'$Name','$color',$useID)");
return true;
}


                  public function loadprd()
{
$query = $this->db->query("SELECT tbl_stock_details.ITID, tbl_stock_details.CAtID, tbl_stock_details.ITEMID,
 tbl_stock_details.CID, tbl_stock_details.SID, tbl_stock_details.Salesprice, tbl_stock_details.Discount,
  tbl_stock_details.PurchasePrice, tbl_stock_details.status, 
tbl_stock_details.BarCode, tbl_stock_details.userID, tbl_stock_details.entryDate,
 tbl_items.Name, tbl_catagory.Name AS CatName
FROM     tbl_stock_details INNER JOIN
tbl_catagory ON tbl_stock_details.CAtID = tbl_catagory.CatID INNER JOIN
tbl_items ON tbl_stock_details.ITEMID = tbl_items.ItemID");
return $query->result_array();
}
public function editItems($id)
{
$query = $this->db->query("SELECT * FROM tbl_items where ItemID=$id");
return $query->result_array();
}

public function editItemsprd($id)
{
$query = $this->db->query("SELECT * FROM tbl_stock_details where ITID=$id");
return $query->result_array();
}
public function updateItems($CatID,$Code,$Name,$status,$id)
{
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_items SET CatID = $CatID,Code = $Code,Name ='$Name',status = $status  WHERE (ItemID=$id)");
return true;
}

public function deleteItems($id)
{
$query = $this->db->query("DELETE tbl_items WHERE (ItemID=$id)");
return true;
}

public function getMaxItemNo()
{
$query = $this->db->query("select Max(Code) as itemNo  from tbl_items");
$MaxitemNo = $query->result_array();

$itemNo = 1;
if(count($MaxitemNo)>0){
    if($MaxitemNo[0]['itemNo'] != null){
        $itemNo = $MaxitemNo[0]['itemNo']+1;
    }
 
}
return $itemNo;
}

public function updtedItemsprd($ITID, $Code, $SalePrice, $Discount, $purchasePrice, $status)
{
    $userId = $this->session->userdata('user_id');
    
    // 1. Fetch category from tbl_items
    $item = $this->db->get_where('tbl_items', ['ItemID' => $Code])->row();
    
    if (!$item) {
        return false; // Item not found
    }

    $CatID = $item->CatID;

    // 2. Fetch current stock record
    $existing = $this->db->get_where('tbl_stock_details', ['ITID' => $ITID])->row();

    if (!$existing) {
        return false; // Record not found
    }

    // 3. Check if any price/discount fields changed
    $isSalesPriceChanged    = ($existing->Salesprice != $SalePrice);
    $isPurchasePriceChanged = ($existing->PurchasePrice != $purchasePrice);
    $isDiscountChanged      = ($existing->Discount != $Discount);

    if ($isSalesPriceChanged || $isPurchasePriceChanged || $isDiscountChanged) {
        // 4. Insert into log table
        $logData = [
            'ITID'            => $ITID,
            'ITEMID'          => $existing->ITEMID,
        
            'OldSalesPrice'   => $existing->Salesprice,
            'NewSalesPrice'   => $SalePrice,
            'OldPurchasePrice'=> $existing->PurchasePrice,
            'NewPurchasePrice'=> $purchasePrice,
            'OldDiscount'     => $existing->Discount,
            'NewDiscount'     => $Discount,
            'ChangedBy'       => $userId,
            'ChangeDate'      => date('Y-m-d H:i:s')
        ];
        $this->db->insert('tbl_stock_price_log', $logData);
    }

    // 5. Prepare update data WITHOUT color and size
    $data = [
        'ITEMID'        => $Code,
        'Salesprice'    => $SalePrice,
        'PurchasePrice' => $purchasePrice,
        'status'        => $status,
        'Discount'      => $Discount
        // Removed CID and SID fields
    ];

    // 6. Update the record where ITID matches
    $this->db->where('ITID', $ITID);
    $this->db->update('tbl_stock_details', $data);

    return $this->db->affected_rows() > 0; // Return true if update was successful
}

public function fetchItemsByBarcode($barcode, $limit) {
    $this->db->where('BarCode', $barcode);
    $this->db->limit($limit);
    $query = $this->db->get('view_stock_inventory'); // Replace with your actual table name
    return $query->result();
}

public function tbl_stock_price_log() {
  
    $query = $this->db->get('view_stock_price_log_details'); // Replace with your actual table name
    return $query->result();
}


}
?>
