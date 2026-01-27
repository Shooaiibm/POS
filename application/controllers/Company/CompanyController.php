
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompanyController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Company/CompanyModel', 'M');
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

public function Company()
{
$this->load->view('Company/Company');
}

public function loadCompany()
{
$data = $this->M->loadCompany();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addCompany()
{
$data = $this->M->addCompany($this->input->post('CompanyName',TRUE ),$this->input->post('Address',TRUE ),$this->input->post('Phoneno',TRUE ),$this->input->post('logo',TRUE ),$this->input->post('tagline',TRUE ));
return true;
}

public function editCompany()
{
$data = $this->M->editCompany($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateCompany()
{
    $prevImg = $this->input->post('previmage',TRUE );
    if (!empty($_FILES['logo']['name'])) {
       
        $config['upload_path'] = FCPATH.'assets/img/CompanyImages';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = basename($_FILES["logo"]["name"]);
        
        //Load upload library and initialize configuration
        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('logo')) {
            
            if($prevImg != null){
                
                $path_to_file = FCPATH.'assets/img/CompanyImages/'.$prevImg;
                unlink($path_to_file);
            }
            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/img/img/' . $picture;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '60%';
            $config['width'] = 800;
            $config['height'] = 600;
            $config['new_image'] = 'assets/img/CompanyImages/' . $picture;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        } else {
            echo "helll";

            $picture = $prevImg;
        }
    } else {

        $picture = $prevImg;
    }
$data = $this->M->updateCompany($this->input->post('CompanyName',TRUE ),$this->input->post('Address',TRUE ),$this->input->post('Phoneno',TRUE ),$picture,$this->input->post('tagline',TRUE ),$this->input->post('id',TRUE ));
return true;
}

public function deleteCompany()
{
$data = $this->M->deleteCompany($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    