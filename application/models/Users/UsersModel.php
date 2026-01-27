
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersModel extends CI_Model
{
public function loadUsers()
{
$query = $this->db->query("SELECT *
FROM tbl_users");
return $query->result_array();
}

public function addUsers($Username,$password,$status,$ClientStatus,$catagoryStatus,$itemstatus,$orderStatus,$Dashboardstatus,$SalesStatus,$inwardstatus)
{$Username = $Username=='' || $Username=='undefined' || $Username==NULL || $Username == 'NULL'?"NULL":"'$Username'";$password = $password=='' || $password=='undefined' || $password==NULL || $password == 'NULL'?"NULL":"'$password'";$status = $status=='' || $status=='undefined' || $status==NULL || $status == 'NULL'?"NULL":"'$status'";$ClientStatus = $ClientStatus=='' || $ClientStatus=='undefined' || $ClientStatus==NULL || $ClientStatus == 'NULL'?"NULL":"'$ClientStatus'";$catagoryStatus = $catagoryStatus=='' || $catagoryStatus=='undefined' || $catagoryStatus==NULL || $catagoryStatus == 'NULL'?"NULL":"'$catagoryStatus'";$itemstatus = $itemstatus=='' || $itemstatus=='undefined' || $itemstatus==NULL || $itemstatus == 'NULL'?"NULL":"'$itemstatus'";$orderStatus = $orderStatus=='' || $orderStatus=='undefined' || $orderStatus==NULL || $orderStatus == 'NULL'?"NULL":"'$orderStatus'";$Dashboardstatus = $Dashboardstatus=='' || $Dashboardstatus=='undefined' || $Dashboardstatus==NULL || $Dashboardstatus == 'NULL'?"NULL":"'$Dashboardstatus'";

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_users (Username,password,status,ClientStatus,catagoryStatus,itemstatus,orderStatus,Dashboardstatus,entryDate,SalesStatus,inwardstatus) VALUES ($Username,$password,$status,$ClientStatus,$catagoryStatus,$itemstatus,$orderStatus,$Dashboardstatus,'$dateGet',$SalesStatus,$inwardstatus)");
return true;
}

public function editUsers($id)
{
$query = $this->db->query("SELECT * FROM tbl_users where UserID=$id");
return $query->result_array();
}

public function updateUsers($Username,$password,$status,$ClientStatus,$catagoryStatus,$itemstatus,$orderStatus,$Dashboardstatus,$id,$SalesStatus,$inwardstatus)
{$Username = $Username=='' || $Username=='undefined' || $Username==NULL || $Username == 'NULL'?"NULL":"'$Username'";$password = $password=='' || $password=='undefined' || $password==NULL || $password == 'NULL'?"NULL":"'$password'";$status = $status=='' || $status=='undefined' || $status==NULL || $status == 'NULL'?"NULL":"'$status'";$ClientStatus = $ClientStatus=='' || $ClientStatus=='undefined' || $ClientStatus==NULL || $ClientStatus == 'NULL'?"NULL":"'$ClientStatus'";$catagoryStatus = $catagoryStatus=='' || $catagoryStatus=='undefined' || $catagoryStatus==NULL || $catagoryStatus == 'NULL'?"NULL":"'$catagoryStatus'";$itemstatus = $itemstatus=='' || $itemstatus=='undefined' || $itemstatus==NULL || $itemstatus == 'NULL'?"NULL":"'$itemstatus'";$orderStatus = $orderStatus=='' || $orderStatus=='undefined' || $orderStatus==NULL || $orderStatus == 'NULL'?"NULL":"'$orderStatus'";$Dashboardstatus = $Dashboardstatus=='' || $Dashboardstatus=='undefined' || $Dashboardstatus==NULL || $Dashboardstatus == 'NULL'?"NULL":"'$Dashboardstatus'";
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_users SET Username = $Username,password = $password,status = $status,ClientStatus = $ClientStatus,catagoryStatus = $catagoryStatus,itemstatus = $itemstatus,orderStatus = $orderStatus,Dashboardstatus = $Dashboardstatus,SalesStatus=$SalesStatus,inwardstatus=$inwardstatus WHERE (UserID=$id)");
return true;
}

public function deleteUsers($id)
{
$query = $this->db->query("DELETE tbl_users WHERE (UserID=$id)");
return true;
}

}
?>
