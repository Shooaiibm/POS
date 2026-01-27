
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class WardsModel extends CI_Model
{
public function loadWards()
{
$query = $this->db->query("SELECT *
FROM Entities_wards");
return $query->result_array();
}

public function loadWardsActive()
{
$query = $this->db->query("SELECT *
FROM Entities_wards where wardStatus=1");
return $query->result_array();
}

public function addWards($wardNo,$name,$location,$wardStatus)
{$wardNo = $wardNo=='' || $wardNo=='undefined' || $wardNo==NULL || $wardNo == 'NULL'?"NULL":"'$wardNo'";$name = $name=='' || $name=='undefined' || $name==NULL || $name == 'NULL'?"NULL":"'$name'";$location = $location=='' || $location=='undefined' || $location==NULL || $location == 'NULL'?"NULL":"'$location'";$wardStatus = $wardStatus=='' || $wardStatus=='undefined' || $wardStatus==NULL || $wardStatus == 'NULL'?"NULL":"'$wardStatus'";

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO Entities_wards (wardNo,name,location,wardStatus,EntryDate,EntryDateTime,login_name_id) VALUES ($wardNo,$name,$location,$wardStatus,'$dateGet','$dateGet',$userId)");
return true;
}

public function editWards($id)
{
$query = $this->db->query("SELECT * FROM Entities_wards where id=$id");
return $query->result_array();
}

public function updateWards($wardNo,$name,$location,$wardStatus,$id)
{$wardNo = $wardNo=='' || $wardNo=='undefined' || $wardNo==NULL || $wardNo == 'NULL'?"NULL":"'$wardNo'";$name = $name=='' || $name=='undefined' || $name==NULL || $name == 'NULL'?"NULL":"'$name'";$location = $location=='' || $location=='undefined' || $location==NULL || $location == 'NULL'?"NULL":"'$location'";$wardStatus = $wardStatus=='' || $wardStatus=='undefined' || $wardStatus==NULL || $wardStatus == 'NULL'?"NULL":"'$wardStatus'";
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE Entities_wards SET wardNo = $wardNo,name = $name,location = $location,wardStatus = $wardStatus,updatedDate='$dateGet',updatedBy_id=$userId  WHERE (id=$id)");
return true;
}

public function deleteWards($id)
{
$query = $this->db->query("DELETE Entities_wards WHERE (id=$id)");
return true;
}

public function getMaxWardNo()
{
$query = $this->db->query("select Max(wardNo) as wardNo from Entities_wards");
$MaxWardNo = $query->result_array();

$wardNo = 1;
if(count($MaxWardNo)>0){
    if($MaxWardNo[0]['wardNo'] != null){
        $wardNo = $MaxWardNo[0]['wardNo']+1;
    }
 
}
return $wardNo;
}

}
?>
