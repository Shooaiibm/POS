<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel', 'L');
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
    public function index()
    {
        $this->load->view('Login/login_view');
    }

   
 

public function authenticate()
{
    $username = $this->input->post('cardNo');
    $password = $this->input->post('Password');

    $data = $this->L->login($username, $password);

    if ($data) {
        $this->session->set_userdata($data); // Set session
        redirect('Selection'); // Redirect on success
    } else {
        $this->session->set_flashdata('error', 'Invalid credentials');
        redirect(''); // Redirect back to login page
    }
}

    public function logout()
    {
        $this->session->unset_userdata('ORID');
        $this->session->sess_destroy();
        redirect('');
    }
}
