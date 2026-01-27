
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaffController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Staff/StaffModel', 'M');
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

public function Staff()
{
    
$this->load->view('staff/Staff.php');
}

public function StaffSalary()
{
$this->load->view('Staff/StaffSalary.php');
}


public function loadStaff()
{
$data = $this->M->loadStaff();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loadActiveStaff()
{
$data = $this->M->loadActiveStaff();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function addStaff()
{
    if (!empty($_FILES['picUser']['name'])) {

        $config['upload_path'] = FCPATH.'assets/img/StaffSignature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["picUser"]["name"]);

        //Load upload library and initialize configuration
        $this->load->library('Upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('picUser')) {
            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/img/img/' . $picture;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 800;
            $config['height'] = 600;
            $config['new_image'] = 'assets/img/StaffSignature/' . $picture;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        } else {
            echo "helll";

            $picture = '';
        }
    } else {

        $picture = '';
    }
$data = $this->M->addStaff($_POST['name'],$_POST['DOJ'],$_POST['designationID'],$_POST['Address'],$_POST['emergencyContactno'],$_POST['City'],$_POST['Status'],$_POST['Salary'],$_POST['gender'],$picture,$_POST['AttID'],$_POST['Designation'],$_POST['cnic']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function editStaff()
{
$data = $this->M->editStaff($_POST['id']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateStaff()
{
    $prevImg = $_POST['prevImg'];
    if($prevImg != null){
        
        $path_to_file = FCPATH.'assets/img/StaffSignature/'.$prevImg;
        unlink($path_to_file);
    }
    if (!empty($_FILES['picUser']['name'])) {

        $config['upload_path'] = FCPATH.'assets/img/StaffSignature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["picUser"]["name"]);
        
        //Load upload library and initialize configuration
        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('picUser')) {
            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/img/img/' . $picture;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 800;
            $config['height'] = 600;
            $config['new_image'] = 'assets/img/StaffSignature/' . $picture;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        } else {
            echo "helll";

            $picture = '';
        }
    } else {

        $picture = '';
    }
$data = $this->M->updateStaff($_POST['name'],$_POST['DOJ'],$_POST['designationID'],$_POST['Address'],$_POST['emergencyContactno'],$_POST['City'],$_POST['Status'],$_POST['Salary'],$_POST['gender'],$picture,$_POST['id'],$_POST['AttID'],$_POST['Designation'],$_POST['cnic']);
return true;
}

public function updateStaffWithoutPic()
{
$data = $this->M->updateStaffWithoutPic($_POST['name'],$_POST['DOJ'],$_POST['designationID'],$_POST['Address'],$_POST['emergencyContactno'],$_POST['City'],$_POST['Status'],$_POST['Salary'],$_POST['gender'],$_POST['id'],$_POST['AttID'],$_POST['Designation'],$_POST['cnic']);
return true;
}


public function deleteStaff()
{
$data = $this->M->deleteStaff($_POST['id']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function DeletSalary()
{
$data = $this->M->DeletSalary($_POST['id']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function AddSalary(){
    $data = $this->M->AddSalary($_POST['fromdate'],$_POST['todate']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function getsalary(){
    $data = $this->M->getsalary($_POST['fdate'],$_POST['edate']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

} 
?>           
    