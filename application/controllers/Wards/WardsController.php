
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class WardsController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Wards/WardsModel', 'M');
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

public function Wards()
{
$this->load->view('Wards/Wards');
}

public function loadWards()
{
$data = $this->M->loadWards();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loadWardsActive()
{
$data = $this->M->loadWardsActive();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addWards()
{
$data = $this->M->addWards($this->input->post('wardNo',TRUE ),$this->input->post('name',TRUE ),$this->input->post('location',TRUE ),$this->input->post('wardStatus',TRUE ));
return true;
}

public function editWards()
{
$data = $this->M->editWards($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateWards()
{
$data = $this->M->updateWards($this->input->post('wardNo',TRUE ),$this->input->post('name',TRUE ),$this->input->post('location',TRUE ),$this->input->post('wardStatus',TRUE ),$this->input->post('id',TRUE ));
return true;
}

public function deleteWards()
{
$data = $this->M->deleteWards($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function getMaxWardNo()
{
$data = $this->M->getMaxWardNo();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    