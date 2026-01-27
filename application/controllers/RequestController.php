<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RequestController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('JUMPER/JUMPER_Model', 'j');
    }
    
    public function index()
    {
        $this->load->view('template');
    }
    public function Selection()
    {
       
        $this->load->view('selection');
    }

    public function addData()
    {
        
    // $data = $this->j->addRequestData($_POST["reqInit"],$_POST["orgName"],$_POST["phoneno"],
    // $_POST["emailAddr"],$_POST["nameVisitor"],$_POST["nameDesig"],$_POST["VisitorA"],$_POST["VisitorB"]
    // ,$_POST["VisitorC"],$_POST["VisitorD"],$_POST["orgName2"],$_POST["phoneno2"]
    // ,$_POST["emailAddr2"],$_POST["visitDate"],$_POST["visitTime"],$_POST["visitAgenda"]);
    
    
    // if($data == true){
    //     echo true;
    // }
    // else{
    //     echo false;
    // }

    }

    public function DataDateRange(){
        // $data = $this->j->getDataDateRange($_POST['sDate'],$_POST['eDate']);

        // return $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(200)
        // ->set_output(json_encode($data));
    }

   
    

   
}
