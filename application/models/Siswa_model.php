<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function getSiswa()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->where('siswa.nisn', $this->session->userdata('username'));
        return $this->db->get()->row_array();
    }
}