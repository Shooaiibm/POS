
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClientsController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Clients/ClientsModel', 'M');
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

public function Clients()
{
$this->load->view('Clients/Clients');
}

public function loadClients()
{
$data = $this->M->loadClients();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loadClientsactive()
{
$data = $this->M->loadClientsactive();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function addClients()
{
$data = $this->M->addClients($this->input->post('Name',TRUE ),$this->input->post('City',TRUE ),$this->input->post('address',TRUE ),$this->input->post('phoneno',TRUE ),$this->input->post('email',TRUE ),$this->input->post('status',TRUE ));
return true;
}

public function editClients()
{
$data = $this->M->editClients($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateClients()
{
$data = $this->M->updateClients($this->input->post('Name',TRUE ),$this->input->post('City',TRUE ),$this->input->post('address',TRUE ),$this->input->post('phoneno',TRUE ),$this->input->post('email',TRUE ),$this->input->post('status',TRUE ),$this->input->post('id',TRUE ));
return true;
}

public function deleteClients()
{
$data = $this->M->deleteClients($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    