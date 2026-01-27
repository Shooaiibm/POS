
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffModel extends CI_Model
{
public function loadStaff()
{

    $user_type = $this->session->userdata('user_type');

    //if($user_type=='Admin'){
$query = $this->db->query("SELECT *
FROM tbl_salesman ");
return $query->result_array();
  
}

public function loadActiveStaff()
{
    $user_type = $this->session->userdata('user_type');
 
   
$query = $this->db->query("SELECT *
FROM tbl_salesman
WHERE Status=1");
return $query->result_array();
  
}

public function addStaff($name,$DOJ,$designationID,$Address,$emergencyContactno,$City,$Status,$Salary,$gender,$picture,$AttID,$Designation,$cnic)
{
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
// $queryL1 = $this->db->query("Select id,generatedCode from Financials_l1 where L1Name='ASSET' OR L1Name='ASSETS'");
// $l1Array = $queryL1->result_array();
// if(count($l1Array)){
$query = $this->db->query("INSERT INTO tbl_salesman 
(SalesmanName,Status) 
VALUES ('$name',$Status,)");
 $Staff_Id = $this->db->insert_id();


    // $currentDate = date('Y-m-d H:i:s');
    // $l1_id_get = $l1Array[0]['id'];
    // $l1_code_get = $l1Array[0]['generatedCode'];

    // $codeGet = 1;
    // $queryInvoice = $this->db->query("SELECT MAX(generatedCodeL2) AS generatedCodeL2
    // FROM           dbo.Financials_l2
    // ");
    // $codeData = $queryInvoice->result_array();
    // if(count($codeData)>0){
    //     if($codeData[0]['generatedCodeL2'] != null){
    //         $codeGet = $codeData[0]['generatedCodeL2'] + 1;
    //     }
        
    // }
    // $Code = $l1_code_get.'-'.$codeGet;
    // $query = $this->db->query("INSERT INTO Financials_l2 
    // (L2Name,Code,L2Description,Status,EntryDateTime,L1ID_id,login_name_id,StaffId_id,generatedCodeL2) 
    // VALUES ('$name','$Code','Auto Staff Added In Financials',1,'$dateGet',$l1_id_get,$userId,$Staff_Id,$codeGet)");
    //  $L4_id = $this->db->insert_id();
     
    // //  $queryVoucher = $this->db->query("SELECT MAX(VoucherNo) AS VoucherNo
    //  FROM           dbo.view_voucher_transactions
    //  WHERE DateName='$currentDate' AND OVStatus=1 AND Name='OPENING VOUCHER'
    //  ");

    // $queryTranDate =$this->db->query("SELECT id,FinancialYear_id
    // FROM          Financials_transaction_date
    // WHERE DateName='$currentDate'");
    // $TranDate = $queryTranDate->result_array();

    // $tranDateId = $TranDate[0]['id'];
    // $FYID = $TranDate[0]['FinancialYear_id'];
    //  $VoucherNo = $queryVoucher->result_array();
    //  $VoucherNoAdd = 1;
    //  if(count($VoucherNo)>0){
    //    $VoucherNoAdd = (int)$VoucherNo[0]['VoucherNo']+1;
    //  }
    //  if($balance >0){
    //     $query = $this->db->query("SELECT        id
    //     FROM            dbo.Financials_voucher_type
    //     WHERE        (dbo.Financials_voucher_type.Name = 'OPENING VOUCHER')");
    //     $ovBackend = $query->result_array();
    //     $codeBackend = $Code;
    //     $voucherId = $ovBackend[0]['id'];
    //     $query = $this->db->query("INSERT INTO  Financials_voucher (VoucherNo
    //     ,VDNo
    //     ,UnitID
    //     ,Code
    //     ,Debit
    //     ,Description
    //     ,OVStatus
    //     ,FYID_id
    //     ,TransID_id
    //     ,VoucherID
    //     ,backendEntry
    //     ,login_name_id
    //     ,Activation) VALUES ($VoucherNoAdd,1,3,'$codeBackend',0,'Auto Opening Balance Added',1,$FYID,$tranDateId,$voucherId,1,$userId,1)");
    //  }
     
    return true;        
// }
// else{
//   return false;
// }
}

public function editStaff($id)
{
$query = $this->db->query("SELECT * FROM tbl_salesman where SalesmanID=$id");
return $query->result_array();
}

public function updateStaff($name,$DOJ,$designationID,$Address,$emergencyContactno,$City,$Status,$Salary,$gender,$picture,$id,$AttID,$Designation,$cnic)
{
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE tbl_salesman SET 
name = '$name',
Status=$Status,


WHERE (SalesmanID=$id)");
return true;
}

// public function updateStaffWithoutPic($name,$DOJ,$designationID,$Address,$emergencyContactno,$City,$Status,$Salary,$gender,$id,$AttID,$Designation,$cnic)
// {
// $userId = $this->session->userdata('user_id');
// $dateGet = date('Y-m-d h:m:s');
// $query = $this->db->query("UPDATE tbl_salesman SET 
// name = '$name',
// Status=$Status,
// DOJ='$DOJ',
// designationID = 1,
// Address = '$Address',
// emergencyContactno='$emergencyContactno',
// City='$City',
// Salary=$Salary,
// gender='$gender',
// updatedDate='$dateGet',updatedBy_id=$userId,Designation='$Designation',CNIC='$cnic'

// WHERE (id=$id)");
// return true;
// }

public function deleteStaff($id)
{
$query = $this->db->query("DELETE tbl_staff WHERE (id=$id)");
return true;
}
public function AddSalary($FromDate, $todate)
{
    $userId = $this->session->userdata('user_id');
    $entryDate = date('Y-m-d H:i:s'); // Fixed time format to H:i:s
    
    // Check if any salary records already exist for the given date range
    $existingRecords = $this->db->query("
        SELECT COUNT(*) AS recordCount 
        FROM tbl_Salary 
        WHERE (FromDate <= '$todate' AND todate >= '$FromDate')
    ");
    $recordCount = $existingRecords->row()->recordCount;

    if ($recordCount > 0) {
        // If records are found, return false
        return false;
    }

    // Fetch active staff members with their salaries
    $getStaff = $this->db->query("SELECT Status, id, Salary FROM dbo.tbl_staff WHERE Status = 1");
    $staffList = $getStaff->result_array();
    
    // Calculate total days between FromDate and todate
    $date1 = new DateTime($FromDate);
    $date2 = new DateTime($todate);
    $totalDays = $date1->diff($date2)->days + 1; // Include both start and end dates
    
    foreach ($staffList as $row) {
        $SID = $row['id'];
        $salary = $row['Salary'];
        
        // Fetch attendance days within the date range for the staff member
        $getAtt = $this->db->query("
            SELECT COUNT(AttDate) AS attendanceDays
            FROM dbo.view_Staff_Att
            WHERE (SID = $SID) AND (date BETWEEN CONVERT(DATETIME, '$FromDate 00:00:00', 102) AND CONVERT(DATETIME, '$todate 00:00:00', 102))
        ");
        $attendanceResult = $getAtt->row_array();
        $attendanceDays = $attendanceResult['attendanceDays'];
        
        // Calculate the amount based on attendance and total days
        $amount = ($salary / $totalDays) * $attendanceDays;
        $perdaySalary = $salary / $totalDays;
        
        // Insert the salary record
        $this->db->query("INSERT INTO tbl_Salary 
            (FromDate, todate, EMPID, Days, amount, userid, entryDate, NOofDays, perdaysalary, Salary) 
            VALUES 
            ('$FromDate', '$todate', $SID, $attendanceDays, $amount, $userId, '$entryDate', $totalDays, $perdaySalary, $salary)
        ");
    }

    return true;
}





public function getsalary($FromDate, $todate){
    $query = $this->db->query("SELECT tbl_Salary.*, tbl_staff.name, tbl_staff.DOJ, tbl_staff.Designation, tbl_staff.gender, tbl_staff.image, tbl_staff.Salary
        FROM tbl_Salary 
        INNER JOIN tbl_staff ON tbl_Salary.EMPID = tbl_staff.id
        WHERE tbl_Salary.FromDate >= '$FromDate 00:00:00' 
          AND tbl_Salary.todate <= '$todate 00:00:00'");
    return $query->result_array(); 
}
public function DeletSalary($id)
{
$query = $this->db->query("DELETE tbl_Salary WHERE (SID=$id)");
return true;
}
}
?>
