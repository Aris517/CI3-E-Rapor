<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rapor_model extends CI_Model
{
    public function getRapor($semester)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.nisn = nilai.nisn');
        $this->db->join('pelajaran', 'nilai.id_pelajaran = pelajaran.id_pelajaran');
        $this->db->where('nilai.nisn', $this->session->userdata('username'));
        $this->db->where('nilai.id_semester', $semester);
        return $this->db->get()->result_array();
    }

    public function getDetail($kompetensi, $nilai)
    {
        $this->db->select('*');
        $this->db->from('kompetensi');
        $this->db->join('nilai', 'nilai.id_kompetensi = kompetensi.id_kompetensi');
        $this->db->join('pelajaran', 'kompetensi.id_pelajaran = pelajaran.id_pelajaran');
        $this->db->join('semester', 'kompetensi.id_semester = kompetensi.id_semester');
        $this->db->join('siswa', 'nilai.nisn = siswa.nisn');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
        $this->db->join('wali', 'kelas.id_kelas = wali.id_kelas');
        $this->db->where('kompetensi.id_kompetensi', $kompetensi);
        $this->db->where('nilai.id_nilai', $nilai);
        return $this->db->get()->row_array();
    }

    public function cekIsiNilai($pelajaran)
    {
        $isi = $this->db->get_where('nilai', ['id_pelajaran' => $pelajaran])->num_rows();
        if ($isi > 0) {
            $isi = true;
        } else {
            $isi = false;
        }

        return $isi;
    }

    public function getNilaiJoin($pelajaran, $kelas = null, $semester = null, $nilai = null)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.nisn = nilai.nisn');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $this->db->join('semester', 'semester.id_semester = nilai.id_semester');
        $this->db->join('pelajaran', 'pelajaran.id_pelajaran = nilai.id_pelajaran');
        if ($this->session->userdata('role_id') == 3) {
            $this->db->where('nilai.id_pelajaran', $pelajaran);
        }
        if ($this->session->userdata('role_id') == 2 & !empty($nilai)) {
            $this->db->where('nilai.id_pelajaran', $pelajaran);
        }
        if (!empty($kelas) & !empty($semester)) {
            // $this->db->join('pelajaran', 'pelajaran.id_pelajaran = nilai.id_pelajaran');
            $this->db->where('nilai.id_semester', $semester);
            $this->db->where('siswa.id_kelas', $kelas);
        }

        return $this->db->get()->result_array();
    }

    public function getNilaiKelas($pelajaran, $semester, $kelas)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'nilai.nisn = siswa.nisn');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas');
        $this->db->where('nilai.id_pelajaran', $pelajaran);
        $this->db->where('nilai.id_semester', $semester);
        $this->db->where('siswa.id_kelas', $kelas);

        return $this->db->get()->result_array();
    }

    public function getNilai($id)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('siswa', 'nilai.nisn = siswa.nisn');
        $this->db->join('semester', 'nilai.id_semester = semester.id_semester');
        $this->db->where('nilai.id_nilai', $id);

        return $this->db->get()->row_array();
    }

    public function cekTahfiz($nilai)
    {
        $row = $this->db->get_where('nilai', ['id_nilai' => $nilai])->row_array();
        if ($row['id_pelajaran'] == 1) {
            $tahfiz = true;
        } else {
            $tahfiz = false;
        }

        return $tahfiz;
    }
}
