
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompanyModel extends CI_Model
{
public function loadCompany()
{
$query = $this->db->query("SELECT *
FROM tbl_company");
return $query->result_array();
}

public function addCompany($CompanyName,$Address,$Phoneno,$logo,$tagline)
{$CompanyName = $CompanyName=='' || $CompanyName=='undefined' || $CompanyName==NULL || $CompanyName == 'NULL'?"NULL":"'$CompanyName'";$Address = $Address=='' || $Address=='undefined' || $Address==NULL || $Address == 'NULL'?"NULL":"'$Address'";$Phoneno = $Phoneno=='' || $Phoneno=='undefined' || $Phoneno==NULL || $Phoneno == 'NULL'?"NULL":"'$Phoneno'";$logo = $logo=='' || $logo=='undefined' || $logo==NULL || $logo == 'NULL'?"NULL":"'$logo'";$tagline = $tagline=='' || $tagline=='undefined' || $tagline==NULL || $tagline == 'NULL'?"NULL":"'$tagline'";

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO tbl_company (CompanyName,Address,Phoneno,logo,tagline) VALUES ($CompanyName,$Address,$Phoneno,$logo,$tagline)");
return true;
}

public function editCompany($id)
{
$query = $this->db->query("SELECT * FROM tbl_company where CID =$id");
return $query->result_array();
}

public function updateCompany($CompanyName,$Address,$Phoneno,$logo,$tagline,$id)
{$CompanyName = $CompanyName=='' || $CompanyName=='undefined' || $CompanyName==NULL || $CompanyName == 'NULL'?"NULL":"'$CompanyName'";$Address = $Address=='' || $Address=='undefined' || $Address==NULL || $Address == 'NULL'?"NULL":"'$Address'";$Phoneno = $Phoneno=='' || $Phoneno=='undefined' || $Phoneno==NULL || $Phoneno == 'NULL'?"NULL":"'$Phoneno'";$logo = $logo=='' || $logo=='undefined' || $logo==NULL || $logo == 'NULL'?"NULL":"'$logo'";$tagline = $tagline=='' || $tagline=='undefined' || $tagline==NULL || $tagline == 'NULL'?"NULL":"'$tagline'";
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_company SET CompanyName = $CompanyName,Address = $Address,Phoneno = $Phoneno,logo = $logo,tagline = $tagline  WHERE (CID=$id)");
return true;
}

public function deleteCompany($id)
{
$query = $this->db->query("DELETE tbl_company WHERE (CID=$id)");
return true;
}

}
?>
