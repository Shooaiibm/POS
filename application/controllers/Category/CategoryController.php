
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Category/CategoryModel', 'M');
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

public function Category()
{
$this->load->view('Category/Category');
}

public function loadCategory()
{
$data = $this->M->loadCategory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function loaditemss()
{
$data = $this->M->loaditemss($this->input->post('CatID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loaditemssall()
{
$data = $this->M->loaditemssall($this->input->post('CatID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loaditemssDetails()
{
$data = $this->M->loaditemssDetails($this->input->post('IID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loaditemssDetailsbarcode()
{
$data = $this->M->loaditemssDetailsEIMI($this->input->post('IEMINo',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loaditemssDetailscolor()
{
$data = $this->M->loaditemssDetailscolor($this->input->post('IID',TRUE ),$this->input->post('cid',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loaditemssDetailscolorall()
{
$data = $this->M->loaditemssDetailscolorall($this->input->post('IID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loaditemssDetailsEIMI()
{
$data = $this->M->loaditemssDetailsEIMI($this->input->post('IID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}



public function loaditemssDetailssize()
{
$data = $this->M->loaditemssDetailssize($this->input->post('IID',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loaditemssDetailssizeall()
{
$data = $this->M->loaditemssDetailssizeall($this->input->post('IID',TRUE ),$this->input->post('sizename',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}




public function loadActiveCategory()
{
$data = $this->M->loadActiveCategory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addCategory()
{
$data = $this->M->addCategory($this->input->post('Name',TRUE ),$this->input->post('Status',TRUE ));
return true;
}

public function editCategory()
{
$data = $this->M->editCategory($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateCategory()
{
$data = $this->M->updateCategory($this->input->post('Name',TRUE ),$this->input->post('Status',TRUE ),$this->input->post('id',TRUE ));
return true;
}

public function deleteCategory()
{
$data = $this->M->deleteCategory($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    