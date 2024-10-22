<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Laporan extends CI_Controller
{
    public function kelas()
    {
        $data['title'] = 'Laporan Kelas';
        $data['semester'] = $this->db->get('semester')->result_array();
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $guru = $this->user->user('guru', 'nip', $this->session->userdata('username'));

        $data['cek'] = false;
        $post = $this->input->post(null, true);
        if (!empty($post['semester']) & !empty($post['kelas'])) {
            $data['nilai'] = $this->rapor->getNilaiKelas($guru['id_pelajaran'], $post['semester'], $post['kelas']);
            $data['idKelas'] = $post['kelas'];
            $data['idSemester'] = $post['semester'];
            $data['idPelajaran'] = $guru['id_pelajaran'];
            $data['cek'] = true;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('laporan/laporan_kelas', $data);
        $this->load->view('templates/footer');
    }

    public function cetak($kompetensi, $nilai)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('j F Y');

        $data['title'] = 'Cetak Rapor';
        $data['cekTahfiz'] = $this->rapor->cekTahfiz($nilai);
        $data['detail'] = $this->rapor->getDetail($kompetensi, $nilai);
        $data['tgl'] = $tgl;
        $data['wali'] = $this->user->user('wali', 'nip', $this->session->userdata('username'));

        $this->load->view('rapor/cetak', $data);
    }

    public function cetakKelas($semester, $kelas, $pelajaran)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('j F Y');

        $data['kelas'] = $this->db->get_where('kelas', ['id_kelas' => $kelas])->row_array();

        $data['title'] = 'Cetak Nilai perKelas';
        $data['nilai'] = $this->rapor->getNilaiKelas($pelajaran, $semester, $kelas);
        $data['tgl'] = $tgl;
        $data['guru'] = $this->user->user('guru', 'nip', $this->session->userdata('username'));
        $data['pelajaran'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $pelajaran])->row_array();

        $this->load->view('laporan/cetak_perkelas', $data);
    }
}
