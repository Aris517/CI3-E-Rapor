<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_model extends CI_Model
{
    public function getAll($tabel, $join = [], $option = [], $where = [])
    {
        $this->db->select('*');
        $this->db->from($tabel);

        if (!empty($join)) {
            foreach ($join as $key => $vjoin) {
                foreach ($option as $op => $voption) {
                    if ($vjoin == $op) {
                        $this->db->join($vjoin, $voption, 'LEFT');
                    }
                }
            }
        }

        if (!empty($where)) {
            foreach ($where as $w => $vwhere) {
                $this->db->where($w, $vwhere);
            }
        }

        $result = $this->db->get()->result_array();
        return $result;
    }


        
    
    public function cekIsi($tabel, $where=[])
    {
        $this->db->select('*');
        $this->db->from($tabel);
        if(empty($where)) {
            $cek = $this->db->get()->num_rows();
        } else {
            foreach ($where as $w => $row) {
                $this->db->where($w, $row);
            }
            $cek = $this->db->get()->num_rows();
        }
        $isi = false;
        if ($cek > 0) {
            $isi = true;
        }

        return $isi;
    }
}