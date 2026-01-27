
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClientsModel extends CI_Model
{
public function loadClients()
{
$query = $this->db->query("SELECT *
FROM tbl_clients");
return $query->result_array();
}

public function loadClientsActive()
{
$query = $this->db->query("SELECT *
FROM tbl_clients where status=1");
return $query->result_array();
}

public function addClients($Name,$City,$address,$phoneno,$email,$status)
{$Name = $Name=='' || $Name=='undefined' || $Name==NULL || $Name == 'NULL'?"NULL":"'$Name'";$City = $City=='' || $City=='undefined' || $City==NULL || $City == 'NULL'?"NULL":"'$City'";$phoneno = $phoneno=='' || $phoneno=='undefined' || $phoneno==NULL || $phoneno == 'NULL'?"NULL":"'$phoneno'";$email = $email=='' || $email=='undefined' || $email==NULL || $email == 'NULL'?"NULL":"'$email'";$status = $status=='' || $status=='undefined' || $status==NULL || $status == 'NULL'?"NULL":"'$status'";

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_clients (Name,City,address,phoneno,email,status) VALUES ($Name,$City,'$address',$phoneno,$email,$status)");
return true;
}

public function editClients($id)
{
$query = $this->db->query("SELECT * FROM tbl_clients where CID=$id");
return $query->result_array();
}

public function updateClients($Name,$City,$address,$phoneno,$email,$status,$id)
{$Name = $Name=='' || $Name=='undefined' || $Name==NULL || $Name == 'NULL'?"NULL":"'$Name'";$City = $City=='' || $City=='undefined' || $City==NULL || $City == 'NULL'?"NULL":"'$City'";$phoneno = $phoneno=='' || $phoneno=='undefined' || $phoneno==NULL || $phoneno == 'NULL'?"NULL":"'$phoneno'";$email = $email=='' || $email=='undefined' || $email==NULL || $email == 'NULL'?"NULL":"'$email'";$status = $status=='' || $status=='undefined' || $status==NULL || $status == 'NULL'?"NULL":"'$status'";
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_clients SET Name = $Name,City = $City,address = '$address',phoneno = $phoneno,email = $email,status = $status  WHERE (CID=$id)");
return true;
}

public function deleteClients($id)
{
$query = $this->db->query("DELETE tbl_clients WHERE (CID=$id)");
return true;
}

}
?>
