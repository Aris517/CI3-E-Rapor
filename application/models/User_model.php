<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function user($tabel, $field, $username)
    {
        return $this->db->get_where($tabel, [$field => $username])->row_array();
    }
    
    public function getAll($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }
}