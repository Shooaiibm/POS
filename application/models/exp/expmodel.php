
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class expmodel extends CI_Model
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

public function addItemsprd($Code, $SalePrice,$Discount, $purchasePrice, $color, $Memory, $status)
{
    // 1. Fetch category
    $item = $this->db->get_where('tbl_items', ['ItemID' => $Code])->row();
    $CatID = $item->CatID;
    
    // 2. Prepare data and insert
    $userId  = $this->session->userdata('user_id');
    $dateGet = date('Y-m-d H:i:s');
    $data = [
        'CAtID'         => $CatID,
        'ITEMID'        => $Code,
        'CID'           => $color,
        'SID'           => $Memory,
        'Salesprice'    => $SalePrice,
        'PurchasePrice' => $purchasePrice,
        'status'        => $status,
        'userID'        => $userId,
        'entryDate'     => $dateGet,   'Discount'     => $Discount
    ];
    $this->db->insert('tbl_stock_details', $data);
    
    // 3. Get the newly inserted record’s primary key (ITID)
    $ITID = $this->db->insert_id();
    
    // 4. Generate a 13-digit barcode:
    //    - Start with fixed parts: CatID, ItemID, ColorID, SizeID (padded if needed)
    //    - Fill the rest with random digits
    //    - Ensure total length = 13
    $fixed = 
        str_pad($CatID, 2, '0', STR_PAD_LEFT) .
        str_pad($Code, 4, '0', STR_PAD_LEFT) .
        str_pad($color, 2, '0', STR_PAD_LEFT) .
        str_pad($Memory, 2, '0', STR_PAD_LEFT);
    // fixed length = 2+4+2+2 = 10 digits; need 3 more random
    do {
        $random = random_int(0, 999);
        $randPart = str_pad($random, 3, '0', STR_PAD_LEFT);
        $barcode = $fixed . $randPart;
        // check uniqueness
        $exists = $this->db
            ->where('BarCode', $barcode)
            ->count_all_results('tbl_stock_details') > 0;
    } while ($exists);
    
    // 5. Update the record with the barcode
    $this->db
         ->where('ITID', $ITID)
         ->update('tbl_stock_details', ['BarCode' => $barcode]);
    
    return true;
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
 tbl_items.Name, tbl_color.ColorName, tbl_size.SizeName, tbl_catagory.Name AS CatName
FROM     tbl_stock_details INNER JOIN
tbl_catagory ON tbl_stock_details.CAtID = tbl_catagory.CatID INNER JOIN
tbl_items ON tbl_stock_details.ITEMID = tbl_items.ItemID INNER JOIN
tbl_color ON tbl_stock_details.CID = tbl_color.CID INNER JOIN
tbl_size ON tbl_stock_details.SID = tbl_size.SID");
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



public function updtedItemsprd($ITID, $Code, $SalePrice, $Discount, $purchasePrice, $color, $Memory, $status)
{
   
    // 1. Fetch category from tbl_items
    $item = $this->db->get_where('tbl_items', ['ItemID' => $Code])->row();
    
    if (!$item) {
        return false; // Item not found
    }

    $CatID = $item->CatID;

    // 2. Prepare data for update
    $data = [
        'CAtID'         => $CatID,
        'ITEMID'        => $Code,
        'CID'           => $color,
        'SID'           => $Memory,
        'Salesprice'    => $SalePrice,
        'PurchasePrice' => $purchasePrice,
        'status'        => $status,
        'Discount'      => $Discount
    ];

    // 3. Update the record where ITID matches
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

}
?>
