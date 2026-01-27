
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Users/UsersModel', 'M');
}
/**
* Index Page for this controller.
*
* Maps to the following URL
* 		http://example.com/index.php/welcome
*	- or -
* 		http://example.com/index.php/welcome/index
*	- or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/

public function Users()
{
$this->load->view('Users/Users');
}

public function loadUsers()
{
$data = $this->M->loadUsers();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addUsers()
{
$data = $this->M->addUsers($this->input->post('Username',TRUE ),$this->input->post('password',TRUE ),$this->input->post('status',TRUE ),$this->input->post('ClientStatus',TRUE ),$this->input->post('catagoryStatus',TRUE ),$this->input->post('itemstatus',TRUE ),$this->input->post('orderStatus',TRUE ),$this->input->post('Dashboardstatus',TRUE ),$this->input->post('SalesStatus',TRUE ),$this->input->post('inwardstatus',TRUE ));
return true;
}

public function editUsers()
{
$data = $this->M->editUsers($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateUsers()
{
$data = $this->M->updateUsers($this->input->post('Username',TRUE ),$this->input->post('password',TRUE ),$this->input->post('status',TRUE ),$this->input->post('ClientStatus',TRUE ),$this->input->post('catagoryStatus',TRUE ),$this->input->post('itemstatus',TRUE ),$this->input->post('orderStatus',TRUE ),$this->input->post('Dashboardstatus',TRUE ),$this->input->post('id',TRUE ),$this->input->post('SalesStatus',TRUE ),$this->input->post('inwardstatus',TRUE ));
return true;
}

public function deleteUsers()
{
$data = $this->M->deleteUsers($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    