
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
public function loadCategory()
{
$query = $this->db->query("SELECT *
FROM tbl_catagory");
return $query->result_array();
}

public function loadActiveCategory()
{
$query = $this->db->query("SELECT *
FROM tbl_catagory
where Status=1");
return $query->result_array();
}
public function loaditemssall($CatID)
{
$query = $this->db->query("SELECT 
    i.`ItemID`,
    i.`CatID`,
    c.`Name` AS `CategoryName`,
    i.`Code`,
    i.`Name`,
    i.`SalePrice`,
    i.`purchasePrice`,
    i.`image`,
    i.`status`,
    i.`Color`,
    i.`Spece`
FROM `tbl_items` i
LEFT JOIN `tbl_catagory` c ON i.`CatID` = c.`CatID`
WHERE 1 ");
return $query->result_array();
}
public function loaditemss($CatID)
{
$query = $this->db->query("SELECT *
FROM view_stock_inventory");
return $query->result_array();
}
public function loaditemssDetailscolor($CatID,$CID)
{
$query = $this->db->query("SELECT *
FROM tbl_color 
where CID=$CID");
return $query->result_array();
}
public function loaditemssDetailscolorall($CatID)
{
$query = $this->db->query("SELECT *
FROM tbl_color 
where ITEMID=$CatID");
return $query->result_array();
}
public function loaditemssDetails($CatID)
{
$query = $this->db->query("SELECT *
FROM view_stock_inventory 
where ITID=$CatID");
return $query->result_array();
}
public function loaditemssDetailsEIMI($CatID)
{
$query = $this->db->query("SELECT *
FROM view_stock_inventory 
where BarCode=$CatID");
return $query->result_array();
}

public function loaditemssDetailssize($CatID)
{
$query = $this->db->query("SELECT *
FROM tbl_size 
where ITEMID=$CatID ");
return $query->result_array();
}

public function loaditemssDetailssizeall($CatID,$SizeName)
{
$query = $this->db->query("SELECT *
FROM tbl_size 
where ITEMID=$CatID and SizeName='$SizeName'");
return $query->result_array();
}



public function addCategory($Name,$Status)
{$Name = $Name=='' || $Name=='undefined' || $Name==NULL || $Name == 'NULL'?"NULL":"'$Name'";$Status = $Status=='' || $Status=='undefined' || $Status==NULL || $Status == 'NULL'?"NULL":"'$Status'";

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_catagory (Name,Status) VALUES ($Name,$Status)");
return true;
}

public function editCategory($id)
{
$query = $this->db->query("SELECT * FROM tbl_catagory where CatID=$id");
return $query->result_array();
}

public function updateCategory($Name,$Status,$id)
{$Name = $Name=='' || $Name=='undefined' || $Name==NULL || $Name == 'NULL'?"NULL":"'$Name'";$Status = $Status=='' || $Status=='undefined' || $Status==NULL || $Status == 'NULL'?"NULL":"'$Status'";
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_catagory SET Name = $Name,Status = $Status  WHERE (CatID=$id)");
return true;
}

public function deleteCategory($id)
{
$query = $this->db->query("DELETE tbl_catagory WHERE (CatID=$id)");
return true;
}

}
?>
