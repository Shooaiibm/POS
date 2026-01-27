<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/layouts/Exception.php");
include("./application/views/layouts/PHPMailer.php");
include("./application/views/layouts/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class LoginModel extends CI_Model
{
  public function login($username, $password)
{
    $this->db->where('LOWER(Username)', strtolower($username));
    $this->db->where('password', $password); // NOTE: Use hashing for better security
    $this->db->where('status', 1);

    $query = $this->db->get('tbl_users');

    if ($query->num_rows() > 0) {
        $result = $query->row();

        return [
            'user_id'    => $result->UserID,
            'username'   => $result->Username,
            'client'     => $result->ClientStatus,
            'category'   => $result->catagoryStatus,
            'item'       => $result->itemstatus,
            'order'      => $result->orderStatus,
            'dashboard'  => $result->Dashboardstatus, 
            'sales'      => $result->SalesStatus,
            'inward'     => $result->inwardstatus
        ];
    }

    return false;
}




}
