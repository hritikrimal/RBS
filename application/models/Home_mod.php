<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_mod extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_register()
    {
        $object = array();
        $object['name'] = $this->input->post('name');
        $object['email'] = $this->input->post('email');
        $object['contact'] = $this->input->post('contact');
        $object['address'] = $this->input->post('address');
        $object['password'] = $this->input->post('password');
        $object['confirm_password'] = $this->input->post('con_password');



        // return $object;
        return $this->db->insert('infos', $object);
    }
    // public function fetch_info()
    // {
    //     $fetch_data = $this->db->get('infos')->result_array();
    //     return  $fetch_data;
    // }
    // public function edit_datas()
    // {
    //     $id = $this->input->post('id');
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('infos')->row_array();
    //     return $query;
    // }
    // public function update_infos()
    // {
    //     $id = $this->input->post('id');
    //     $object = array();
    //     $object['name'] = $this->input->post('edit_name');
    //     $object['email'] = $this->input->post('edit_email');
    //     $this->db->where('id', $id);
    //     $this->db->update('infos', $object);
    // }
    // public function delete()
    // {
    //     $id = $this->input->post('id');
    //     $this->db->where('id', $id);
    //     $this->db->delete('infos');
    // }
}
