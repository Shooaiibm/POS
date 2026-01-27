
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class ItemsController extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Items/ItemsModel', 'M');
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

public function Items()
{
$this->load->view('Items/Items');
}

public function loadItems()
{
$data = $this->M->loadItems();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loadItemscolor()
{
$data = $this->M->loadItemscolor();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loaditemsize()
{
$data = $this->M->loaditemsize();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function getMaxItemNo()
{
$data = $this->M->getMaxItemNo();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addItems()
{
    // if (!empty($_FILES['image']['name'])) {

    //     $config['upload_path'] = FCPATH.'assets/img/ItemImages';
    //     $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //     $config['file_name'] = basename($_FILES["image"]["name"]);

    //     //Load upload library and initialize configuration
    //     $this->load->library('Upload', $config);
    //     $this->upload->initialize($config);
    //     if ($this->upload->do_upload('image')) {
    //         $uploadData = $this->upload->data();
    //         $picture = $uploadData['file_name'];
    //         $config['image_library'] = 'gd2';
    //         $config['source_image'] = 'assets/img/img/' . $picture;
    //         $config['create_thumb'] = FALSE;
    //         $config['maintain_ratio'] = FALSE;
    //         $config['quality'] = '60%';
    //         $config['width'] = 800;
    //         $config['height'] = 600;
    //         $config['new_image'] = 'assets/img/ItemImages/' . $picture;
    //         $this->load->library('image_lib', $config);
    //         $this->image_lib->resize();
    //     } else {
    //         echo "helll";

    //         $picture = '';
    //     }
    // } else {

    //     $picture = '';
    // }
$data = $this->M->addItems($this->input->post('CatID',TRUE ),$this->input->post('Code',TRUE ),
$this->input->post('Name',TRUE ),$this->input->post('status',TRUE )


);
return true;
}

public function addItemsprd()
{
    $data = $this->M->addItemsprd(
        $this->input->post('Code', TRUE),
        $this->input->post('SalePrice', TRUE),
        $this->input->post('Discount', TRUE),
        $this->input->post('purchasePrice', TRUE),
        $this->input->post('status', TRUE)
    );
    
    // Return JSON response
    if ($data['success']) {
        echo json_encode([
            'success' => true, 
            'message' => $data['message'],
            'barcode' => $data['barcode']
        ]);
    } else {
        echo json_encode([
            'success' => false, 
            'message' => $data['message']
        ]);
    }
}
public function updtedItemsprd()
{
    $data = $this->M->updtedItemsprd(
        $this->input->post('ID', TRUE),
        $this->input->post('Code', TRUE),
        $this->input->post('SalePrice', TRUE),
        $this->input->post('Discount', TRUE),
        $this->input->post('purchasePrice', TRUE),
        $this->input->post('status', TRUE)
        // Removed color and Memory parameters
    );
    
    if ($data) {
        echo json_encode(['success' => true, 'message' => 'Item updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update item']);
    }
}
public function AddItemscolors()
{
   
$data = $this->M->AddItemscolors($this->input->post('Code',TRUE ),$this->input->post('Name',TRUE ),$this->input->post('color',TRUE ));
return true;
}
public function AddItemssize()
{
   
$data = $this->M->AddItemssize($this->input->post('Code',TRUE ),$this->input->post('Name',TRUE ),$this->input->post('color',TRUE ));
return true;
}



public function loadprd()
{
$data = $this->M->loadprd();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function editItems()
{
$data = $this->M->editItems($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function editItemsprd()
{
$data = $this->M->editItemsprd($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function updateItems()
{
    // $prevImg = $this->input->post('previmage',TRUE );
    // if (!empty($_FILES['image']['name'])) {
       
    //     $config['upload_path'] = FCPATH.'assets/img/ItemImages';
    //     $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //     $config['file_name'] = basename($_FILES["image"]["name"]);
        
    //     //Load upload library and initialize configuration
    //     $this->load->library('Upload', $config);
    //     $this->upload->initialize($config);

    //     if ($this->upload->do_upload('image')) {
            
    //         if($prevImg != null){
                
    //             $path_to_file = FCPATH.'assets/img/ItemImages/'.$prevImg;
    //             unlink($path_to_file);
    //         }
    //         $uploadData = $this->upload->data();
    //         $picture = $uploadData['file_name'];
    //         $config['image_library'] = 'gd2';
    //         $config['source_image'] = 'assets/img/img/' . $picture;
    //         $config['create_thumb'] = FALSE;
    //         $config['maintain_ratio'] = FALSE;
    //         $config['quality'] = '60%';
    //         $config['width'] = 800;
    //         $config['height'] = 600;
    //         $config['new_image'] = 'assets/img/ItemImages/' . $picture;
    //         $this->load->library('image_lib', $config);
    //         $this->image_lib->resize();
    //     } else {
    //         //echo "helll";

    //         $picture = $prevImg;
    //     }
    // } else {

    //     $picture = $prevImg;
    // }
$data = $this->M->updateItems($this->input->post('CatID',TRUE ),
$this->input->post('Code',TRUE ),$this->input->post('Name',TRUE ),$this->input->post('status',TRUE ),$this->input->post('id',TRUE )
);
return true;
}

public function getItemsByBarcode() {
    $barcode = $this->input->post('barcode');
    $qty = $this->input->post('qty');

  
    $data = $this->M->fetchItemsByBarcode($barcode, $qty);
    echo json_encode($data);
}




public function tbl_stock_price_log()
{
$data = $this->M->tbl_stock_price_log();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function deleteItems()
{
$data = $this->M->deleteItems($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
} 
?>           
    