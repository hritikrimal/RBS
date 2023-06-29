<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_con extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_mod');
    }
    // view page 
    public function index()
    {

        $this->load->view('home_view/index.php');
    }

    // ajax request to save information of form
    public function register()
    {
        $this->form_validation->set_rules("name", "Name", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("contact", "Contact", "required");
        $this->form_validation->set_rules("address", "Address", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');



        if ($this->form_validation->run() == true) {
            $obj = $this->home_mod->insert_register();
            $response['success'] = true;
        } else {
            $response['success'] = false;
            $response['errors'] =  strip_tags(validation_errors());
        }
        $this->session->set_flashdata('response', $response);
        echo json_encode($response);
    }
    public function login()
    {
        $this->form_validation->set_rules("gmail", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        $password = $this->input->post('password');


        if ($this->form_validation->run() == true) {
            $obj = $this->home_mod->get_register();
            if ($obj == null) {
                $response['success'] = false;
                $response['errors'] =  "Invalid Email or Password ";
            } else {

                $passwords = $obj['password'];

                if (md5($password) == $passwords) {

                    $_SESSION['rid'] = $obj['reg_id'];
                    $response['success'] = true;
                    $response['data'] = $_SESSION['rid'];
                    $response['url'] = 'http://localhost/RBS/overview';
                } else {
                    $response['success'] = false;
                    $response['errors'] =  "Invalid password ";
                }
            }
        } else {
            $response['success'] = false;
            $response['errors'] =  strip_tags(validation_errors());
        }
        $this->session->set_flashdata('response', $response);
        echo json_encode($response);
    }

    public function owner_view()
    {
        $this->load->view('home_view/ownerview.php');
    }
}
