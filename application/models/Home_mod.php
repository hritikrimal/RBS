<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_mod extends CI_Model
{
    protected $table = "owner_register";
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_register()
    {
        try {
            $object = array();
            $object['name'] = $this->input->post('name');
            $object['email'] = $this->input->post('email');
            $object['contact'] = $this->input->post('contact');
            $object['address'] = $this->input->post('address');
            $object['password'] = md5($this->input->post('password'));
            // return $object;
            return $this->db->insert($this->table, $object);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function get_register()
    {
        $gmail = $this->input->post('gmail');
        $this->db->where("email", $gmail);
        return $this->db->get($this->table)->row_array();
    }
}
