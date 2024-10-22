<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rapor extends CI_Controller
{
    public function index()
    {
        $data['role'] = $this->session->userdata('role_id');
        $data['cekSemester'] = false;
        $data['siswa'] = $this->siswa->getSiswa();
        if (!empty($semester = $this->input->post('semester'))) {
            $data['nilai'] = $this->rapor->getRapor($semester);
            $data['cekSemester'] = true;
            if ($data['role'] == 2) {
                $data['wali'] = $this->user->user('wali', 'nip', $this->session->userdata('username'));
                $data['nilai'] = $this->rapor->getNilaiJoin($data['wali']['id_pelajaran'], $data['wali']['id_kelas'], $semester);
            }
        }
        $data['semester'] = $this->db->get('semester')->result_array();
        $data['title'] = 'Rapor';

        $this->load->view('templates/header', $data);
        $this->load->view('rapor/rapor', $data);
        $this->load->view('templates/footer');
    }

    public function detail($kompetensi, $nilai)
    {
        $data['title'] = 'Detail Nilai';
        $data['cekTahfiz'] = $this->rapor->cekTahfiz($nilai);
        $data['detail'] = $this->rapor->getDetail($kompetensi, $nilai);

        $this->load->view('templates/header', $data);
        $this->load->view('rapor/detail', $data);
        $this->load->view('templates/footer');
    }
}
