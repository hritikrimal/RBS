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
        $this->form_validation->set_rules("con_password", "Confirm password", "required");


        if ($this->form_validation->run() == true) {
            $obj = $this->home_mod->insert_register();
            $response['success'] = true;
            // $response['data'] = $obj;
        } else {
            $response['success'] = false;
            $response['errors'] =  strip_tags(validation_errors());
        }
        $this->session->set_flashdata('response', $response);
        echo json_encode($response);
    }
    // public function fetch_data()
    // {
    //     $data = $this->home_mod->fetch_info();
    //     if ($data) {
    //         $response['success'] = true;
    //         $response['data'] = $data;
    //     } else {
    //         $response['success'] = false;
    //         $response['error'] = "No data";
    //     }
    //     echo json_encode($response);
    // }
    // public function edit_data()
    // {
    //     $rowdata = $this->home_mod->edit_datas();
    //     $response['data'] = $rowdata;

    //     echo json_encode($response);
    // }
    // public function update_data()
    // {
    //     $this->home_mod->update_infos();
    //     $response['success'] = true;
    //     echo json_encode($response);
    // }
    // public function delete_data()
    // {
    //     $this->home_mod->delete();
    //     $response['success'] = true;
    //     echo json_encode($response);
    // }
}
