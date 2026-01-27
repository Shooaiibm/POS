
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

public function totalCategories()
{
$query = $this->db->query("SELECT *
FROM tbl_Catagory where Status=1");
return $query->result_array();
}

public function totalItems()
{
$query = $this->db->query("SELECT *
FROM tbl_items
where status=1");
return $query->result_array();
}

public function totalClients()
{
    $query = $this->db->query("SELECT *
    FROM tbl_clients
    where status=1");
    return $query->result_array();
}

public function loadclient()
{
    $query = $this->db->query("SELECT *
    FROM tbl_clients
    where status=1");
    return $query->result_array();
}



public function totalOrdersCounter($startDate,$endDate)
{
    $query = $this->db->query("SELECT OrderDate, COUNT(OID) AS counter
FROM     view_order_scanned
where OrderDate between '$startDate' and '$endDate'
GROUP BY OrderDate
");
    return $query->result_array();
}

public function totalOrdersAmount($startDate,$endDate)
{
    $query = $this->db->query("SELECT view_details_Count.Amont, view_details_Count.Quantity, tbl_Order.OrderDate, view_details_Count.OID
FROM     view_details_Count INNER JOIN
                  tbl_Order ON view_details_Count.OID = tbl_Order.OID
where OrderDate between '$startDate' and '$endDate'
GROUP BY view_details_Count.Amont, view_details_Count.Quantity, tbl_Order.OrderDate, view_details_Count.OID
");
    return $query->result_array();
}
}
?>
