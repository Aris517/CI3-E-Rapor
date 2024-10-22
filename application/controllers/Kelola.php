<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
    public function nilai($nilai = null)
    {
        if (!empty($nilai)) {
            $nilai = '1';
        }
        $data['title'] = 'Kelola Nilai';
        $data['user'] = $this->user->user('guru', 'nip', $this->session->userdata('username'));
        $pelajaran = $data['user']['id_pelajaran'];
        $data['cekIsiNilai'] = $this->rapor->cekIsiNilai($pelajaran);
        $data['nilai'] = $this->rapor->getNilaiJoin($pelajaran, '', '', $nilai);

        $data['siswa'] = $this->user->getAll('siswa');
        $data['semester'] = $this->user->getAll('semester');

        $this->load->view('templates/header', $data);
        $this->load->view('guru/kelola_nilai', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->session->userdata('role_id') == 3) {
            $data['user'] = $this->user->user('guru', 'nip', $this->session->userdata('username'));
            // $pelajaran = $data['user']['id_pelajaran'];
        }
        if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->user->user('wali', 'nip', $this->session->userdata('username'));
            // $pelajaran = $data['user']['id_pelajaran'];
        }

        $data['title'] = 'Tambah Nilai';
        $data['siswa'] = $this->user->getAll('siswa');
        $data['semester'] = $this->user->getAll('semester');

        $this->load->view('templates/header', $data);
        $this->load->view('guru/tambah_nilai', $data);
        $this->load->view('templates/footer');

        if (!empty($this->input->post(null, true))) {
            $kompetensi = $this->db->get_where('kompetensi', ['id_pelajaran' => $this->input->post('id_pelajaran'), 'id_semester' => $this->input->post('semester')])->row_array();

            if (!empty($this->input->post('nisn')) & !empty($this->input->post('semester'))) {
                if (!empty($this->input->post('nilai1'))) {
                    $nilai1 = $this->input->post('nilai1');
                } else {
                    $nilai1 = '';
                }
                if (!empty($this->input->post('nilai2'))) {
                    $nilai2 = $this->input->post('nilai2');
                } else {
                    $nilai2 = '';
                }
                if (!empty($this->input->post('nilai3'))) {
                    $nilai3 = $this->input->post('nilai3');
                } else {
                    $nilai3 = '';
                }
                if (!empty($this->input->post('nilai4'))) {
                    $nilai4 = $this->input->post('nilai4');
                } else {
                    $nilai4 = '';
                }
                if (!empty($this->input->post('nilai5'))) {
                    $nilai5 = $this->input->post('nilai5');
                } else {
                    $nilai5 = '';
                }
                $data = [
                    'nisn' => $this->input->post('nisn'),
                    'id_semester' => $this->input->post('semester'),
                    'id_pelajaran' => $this->input->post('id_pelajaran'),
                    'id_kompetensi' => $kompetensi['id_kompetensi'],
                    'nilai1' => $nilai1,
                    'nilai2' => $nilai2,
                    'nilai3' => $nilai3,
                    'nilai4' => $nilai4,
                    'nilai5' => $nilai5
                ];
                $this->db->insert('nilai', $data);
                redirect('kelola/nilai/1');
            } else {
                redirect('kelola/tambah');
            }
        }
    }
    public function edit($nilai = null)
    {
        $data['title'] = 'Edit Nilai';
        $data['n'] = $this->rapor->getNilai($nilai);

        if (!empty($this->input->post(null, true))) {
            if (!empty($this->input->post('nilai1'))) {
                $nilai1 = $this->input->post('nilai1');
            } else {
                $nilai1 = '';
            }
            if (!empty($this->input->post('nilai2'))) {
                $nilai2 = $this->input->post('nilai2');
            } else {
                $nilai2 = '';
            }
            if (!empty($this->input->post('nilai3'))) {
                $nilai3 = $this->input->post('nilai3');
            } else {
                $nilai3 = '';
            }
            if (!empty($this->input->post('nilai4'))) {
                $nilai4 = $this->input->post('nilai4');
            } else {
                $nilai4 = '';
            }
            if (!empty($this->input->post('nilai5'))) {
                $nilai5 = $this->input->post('nilai5');
            } else {
                $nilai5 = '';
            }
            $data = [
                'nilai1' => $nilai1,
                'nilai2' => $nilai2,
                'nilai3' => $nilai3,
                'nilai4' => $nilai4,
                'nilai5' => $nilai5
            ];
            $this->db->where('id_nilai', $this->input->post('id_nilai'));
            $this->db->update('nilai', $data);
            redirect('kelola/nilai/1');
        }

        $this->load->view('templates/header', $data);
        $this->load->view('guru/edit_nilai', $data);
        $this->load->view('templates/footer');
    }

    public function kelola($menu, $kompetensi = null)
    {
        $data['title'] = 'Admin | Kelola';
        if ($menu == 2) {
            $tabel = 'siswa';
            $data['result'] = $this->kelola->getAll($tabel, ['kelas'], ['kelas' => 'kelas.id_kelas = siswa.id_kelas']);
            $data['cekIsi'] = $this->kelola->cekIsi($tabel);

            $this->load->view('templates/header', $data);
            $this->load->view('admin/siswa/kelola_siswa', $data);
        } elseif ($menu == 1) {
            $tabel = 'guru';
            $data['result'] = $this->kelola->getAll($tabel, ['pelajaran'], ['pelajaran' => 'pelajaran.id_pelajaran = guru.id_pelajaran']);
            $data['cekIsi'] = $this->kelola->cekIsi($tabel);

            $this->load->view('templates/header', $data);
            $this->load->view('admin/guru/kelola_guru', $data);
        } elseif ($menu == 3) {
            $tabel = 'kelas';
            $data['result'] = $this->kelola->getAll($tabel);
            $data['cekIsi'] = $this->kelola->cekIsi($tabel);

            $this->load->view('templates/header', $data);
            $this->load->view('admin/kelas/kelola_kelas', $data);
        } elseif ($menu == 4) {
            $tabel = 'pelajaran';
            $data['result'] = $this->kelola->getAll($tabel);
            $data['cekIsi'] = $this->kelola->cekIsi($tabel);

            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/kelola_pelajaran', $data);
        } elseif ($menu == 5) {
            $tabel = 'wali';
            $data['result'] = $this->kelola->getAll($tabel, ['kelas'], ['kelas' => 'wali.id_kelas = kelas.id_kelas']);
            $data['cekIsi'] = $this->kelola->cekIsi($tabel);

            $this->load->view('templates/header', $data);
            $this->load->view('admin/wali/kelola_wali', $data);
        } elseif ($menu == 6) {
            $tabel = 'kompetensi';
            $data['ceksem'] = false;
            if (!empty($this->input->post('semester'))) {
                $data['inputsem'] = $this->input->post('semester');
                $data['ceksem'] = $this->kelola->cekIsi('kompetensi', ['id_pelajaran' => $kompetensi, 'id_semester' => $data['inputsem']]);

                $data['result'] = $this->kelola->getAll($tabel, ['pelajaran', 'semester'], ['pelajaran' => 'pelajaran.id_pelajaran = kompetensi.id_pelajaran', 'semester' => 'semester.id_semester = kompetensi.id_semester'], ['kompetensi.id_pelajaran' => $kompetensi, 'kompetensi.id_semester' => $this->input->post('semester')]);
            } else {
                $data['result'] = $this->kelola->getAll($tabel, ['pelajaran', 'semester'], ['pelajaran' => 'pelajaran.id_pelajaran = kompetensi.id_pelajaran', 'semester' => 'semester.id_semester = kompetensi.id_semester'], ['kompetensi.id_pelajaran' => $kompetensi]);
            }
            $data['semester'] = $this->db->get('semester')->result_array();
            $data['cekIsi'] = $this->kelola->cekIsi($tabel, ['id_pelajaran' => $kompetensi]);
            $data['pelajaran'] = $kompetensi;

            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/kompetensi/kelola_kompetensi', $data);
        }

        $this->load->view('templates/footer');
    }

    public function editData($menu, $id, $op = null)
    {
        $data['title'] = 'Admin | Edit Data';

        if ($menu == 1) {
            $data['data'] = $this->db->get_where('guru', ['id_guru' => $id])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/guru/edit_guru', $data);
        } elseif ($menu == 3) {
            $data['data'] = $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/kelas/edit_kelas', $data);
        } elseif ($menu == 4) {
            $data['data'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $id])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/edit_pelajaran', $data);
        } elseif ($menu == 2) {
            $data['data'] = $this->db->get_where('siswa', ['id_siswa' => $id])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/siswa/edit_siswa', $data);
        } elseif ($menu == 6) {
            $data['data'] = $this->db->get_where('kompetensi', ['id_pelajaran' => $id, 'id_semester' => $op])->row_array();
            $data['pelajaran'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $data['data']['id_pelajaran']])->row_array();
            $data['semester'] = $this->db->get_where('semester', ['id_semester' => $op])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/kompetensi/edit_kompetensi', $data);
        }

        $this->load->view('templates/footer');
    }

    public function editRow($menu)
    {

        if ($menu == 1) {
            $this->form_validation->set_rules('id', 'ID Guru', 'required|numeric');
            $this->form_validation->set_rules('nama', 'Nama Guru', 'required');
            $this->form_validation->set_rules('nip', 'NIP Guru', 'required');
        } elseif ($menu == 3) {
            $this->form_validation->set_rules('id', 'ID Kelas', 'required|numeric');
            $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');
        } elseif ($menu == 4) {
            $this->form_validation->set_rules('id', 'ID Pelajaran', 'required|numeric');
            $this->form_validation->set_rules('nama', 'Nama Pelajaran', 'required');
        } elseif ($menu == 2) {
            $this->form_validation->set_rules('id', 'ID Siswa', 'required|numeric');
            $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
            $this->form_validation->set_rules('nisn', 'NISN Siswa', 'required');
            $this->form_validation->set_rules('nism', 'NISM Siswa', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        } elseif ($menu == 6) {
            $this->form_validation->set_rules('pelajaran', 'Pelajaran', 'required');
            $this->form_validation->set_rules('kompetensi1', 'Kompetensi1', 'required');
            $this->form_validation->set_rules('kompetensi2', 'Kompetensi2', 'required');
            $this->form_validation->set_rules('kompetensi3', 'Kompetensi3', 'required');
            $this->form_validation->set_rules('kompetensi4', 'Kompetensi4', 'required');
            $this->form_validation->set_rules('kompetensi5', 'Kompetensi5', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun Ajaran', 'required');
        }

        $post = $this->input->post(null, true);
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Admin | Edit Data';

            if ($menu == 1) {
                $data['data'] = $this->db->get_where('guru', ['id_guru' => $post['id']])->row_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/guru/edit_guru/' . $menu . '/' . $post['id'], $data);
            } elseif ($menu == 3) {
                $data['data'] = $this->db->get_where('kelas', ['id_kelas' => $post['id']])->row_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/kelas/edit_kelas/' . $menu . '/' . $post['id'], $data);
            } elseif ($menu == 4) {
                $data['data'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $post['id']])->row_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/pelajaran/edit_pelajaran/' . $menu . '/' . $post['id'], $data);
            } elseif ($menu == 2) {
                $data['data'] = $this->db->get_where('siswa', ['id_siswa' => $post['id']])->row_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/siswa/edit_siswa/' . $menu . '/' . $post['id'], $data);
            } elseif ($menu == 6) {
                $data['data'] = $this->db->get_where('kompetensi', ['id_pelajaran' => $post['pelajaran'], 'id_semester' => $post['semester']])->row_array();
                $data['pelajaran'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $post['pelajaran']])->row_array();
                $data['semester'] = $this->db->get_where('semester', ['id_semester' => $post['semester']])->row_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/pelajaran/kompetensi/edit_kompetensi', $data);
            }

            $this->load->view('templates/footer');
        } else {
            // Jika validasi berhasil, lakukan proses update data
            $tabel = '';
            $id = '';
            $kondisi = '';
            $data = [];
            $user = [];
            $p = false;

            if ($menu == 1) {
                $tabel = 'guru';
                $id = 'id_guru';
                $kondisi = $post['id'];
                $data = [
                    'guru' => $post['nama'],
                    'nip' => $post['nip']
                ];
                $dataw = [
                    'wali' => $post['nama'],
                    'nip' => $post['nip']
                ];
                $user = [
                    'username' => $post['nip'],
                    'nama' => $post['nama'],
                ];
                $this->db->where('username', $post['nip']);
                $this->db->update('user', $user);

                $cek = $this->db->get_where('wali', ['nip' => $post['nip']])->num_rows();
                if ($cek > 0) {
                    $this->db->where('nip', $post['nip']);
                    $this->db->update('wali', $dataw);
                }
            } elseif ($menu == 3) {
                $tabel = 'kelas';
                $id = 'id_kelas';
                $kondisi = $post['id'];
                $data = [
                    'kelas' => $post['nama'],
                ];
            } elseif ($menu == 4) {
                $tabel = 'pelajaran';
                $id = 'id_pelajaran';
                $kondisi = $post['id'];
                $data = [
                    'pelajaran' => $post['nama'],
                ];
            } elseif ($menu == 2) {
                $tabel = 'siswa';
                $id = 'id_siswa';
                $kondisi = $post['id'];
                $data = [
                    'siswa' => $post['nama'],
                    'nisn' => $post['nisn'],
                    'nism' => $post['nism'],
                    'id_kelas' => $post['kelas'],
                ];
                $user = [
                    'username' => $post['nisn'],
                    'nama' => $post['nama'],
                ];
                $this->db->where('username', $post['nisn']);
                $this->db->update('user', $user);
            } elseif ($menu == 6) {
                $tabel = 'kompetensi';
                $id = 'id_kompetensi';
                $kondisi = $post['id'];
                $data = [
                    'kompetensi1' => $post['kompetensi1'],
                    'kompetensi2' => $post['kompetensi2'],
                    'kompetensi3' => $post['kompetensi3'],
                    'kompetensi4' => $post['kompetensi4'],
                    'kompetensi5' => $post['kompetensi5'],
                    'tahun_ajaran' => $post['tahun'],
                ];
                $p = true;
            }
            $this->db->where($id, $kondisi);
            $this->db->update($tabel, $data);
            if ($p) {
                redirect('kelola/kelola/' . $menu . '/' . $post['pelajaran']);
            }
            redirect('kelola/kelola/' . $menu);
        }
    }


    public function hapus($menu, $ids)
    {
        if ($menu == 1) {
            $tabel = 'guru';
            $id = 'id_guru';
            $hapus = true;

            $row = $this->db->get_where($tabel, [$id => $ids])->row_array();
            $this->db->where('username', $row['nip']);
            $this->db->delete('user');
        } elseif ($menu == 3) {
            $tabel = 'kelas';
            $id = 'id_kelas';
            $hapus = true;
        } elseif ($menu == 4) {
            $tabel = 'pelajaran';
            $id = 'id_pelajaran';
            $hapus = true;
        } elseif ($menu == 2) {
            $tabel = 'siswa';
            $id = 'id_siswa';
            $hapus = true;

            $row = $this->db->get_where($tabel, [$id => $ids])->row_array();
            $this->db->where('username', $row['nisn']);
            $this->db->delete('user');
        } elseif ($menu == 5) {
            $tabel = 'wali';
            $id = 'id_wali';
            $hapus = true;
            $userw = [
                'role_id' => 3,
            ];
            $row = $this->db->get_where($tabel, [$id => $ids])->row_array();
            $this->db->where('username', $row['nip']);
            $this->db->update('user', $userw);
        }

        if ($hapus) {
            $this->db->where($id, $ids);
            $this->db->delete($tabel);
        }

        redirect('kelola/kelola/' . $menu);
    }

    public function tambahData($menu, $pelajaran = null)
    {
        $data['title'] = 'Admin | Tambah Data';
        if ($menu == 1) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/guru/tambah_guru', $data);
        } elseif ($menu == 3) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/kelas/tambah_kelas', $data);
        } elseif ($menu == 4) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/tambah_pelajaran', $data);
        } elseif ($menu == 2) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/siswa/tambah_siswa', $data);
        } elseif ($menu == 5) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/wali/tambah_wali', $data);
        } elseif ($menu == 6) {
            $data['pelajaran'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $pelajaran])->row_array();
            $data['semester'] = $this->db->get('semester')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/pelajaran/kompetensi/tambah_kompetensi', $data);
        }
        $this->load->view('templates/footer');
    }

    public function tambahRow($menu)
    {

        if ($menu == 1) {
            $this->form_validation->set_rules('nama', 'Nama Guru', 'required');
            $this->form_validation->set_rules('nip', 'NIP Guru', 'required');
            $this->form_validation->set_rules('pelajaran', 'Pelajaran', 'required');
        } elseif ($menu == 3) {
            $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required');
            $this->form_validation->set_rules('nama', 'Nama Kelas', 'required');
        } elseif ($menu == 4) {
            $this->form_validation->set_rules('id_pelajaran', 'ID Pelajaran', 'required');
            $this->form_validation->set_rules('nama', 'Nama Pelajaran', 'required');
        } elseif ($menu == 2) {
            $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
            $this->form_validation->set_rules('nisn', 'NISN Siswa', 'required');
            $this->form_validation->set_rules('nism', 'NISM Siswa', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        } elseif ($menu == 5) {
            $this->form_validation->set_rules('nip', 'NIP', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        } elseif ($menu == 6) {
            $this->form_validation->set_rules('pelajaran', 'Pelajaran', 'required');
            $this->form_validation->set_rules('kompetensi1', 'Kompetensi1', 'required');
            $this->form_validation->set_rules('kompetensi2', 'Kompetensi2', 'required');
            $this->form_validation->set_rules('kompetensi3', 'Kompetensi3', 'required');
            $this->form_validation->set_rules('kompetensi4', 'Kompetensi4', 'required');
            $this->form_validation->set_rules('kompetensi5', 'Kompetensi5', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('tahun', 'Tahun Ajaran', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Admin | Tambah Data';
            if ($menu == 1) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/guru/tambah_guru/' . $menu, $data);
            } elseif ($menu == 2) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/siswa/tambah_siswa/' . $menu, $data);
            } elseif ($menu == 3) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/kelas/tambah_kelas/' . $menu, $data);
            } elseif ($menu == 4) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/pelajaran/tambah_pelajaran/' . $menu, $data);
            } elseif ($menu == 5) {
                $this->load->view('templates/header', $data);
                $this->load->view('admin/wali/tambah_wali/' . $menu, $data);
            } elseif ($menu == 6) {
                $data['pelajaran'] = $this->db->get_where('pelajaran', ['id_pelajaran' => $this->input->post('pelajaran')])->row_array();
                $data['semester'] = $this->db->get('semester')->result_array();
                $this->load->view('templates/header', $data);
                $this->load->view('admin/pelajaran/kompetensi/tambah_kompetensi/6', $data);
            }
            $this->load->view('templates/footer');
        } else {
            // Jika validasi berhasil, tambahkan data ke tabel
            $post = $this->input->post(null, true);
            $tabel = '';
            $data = [];
            $norm = false;
            $kom = false;

            if ($menu == 1) {
                $tabel = 'guru';
                $data = [
                    'guru' => $post['nama'],
                    'nip' => $post['nip'],
                    'id_pelajaran' => $post['pelajaran'],
                ];
                $user = [
                    'nama' => $post['nama'],
                    'username' => $post['nip'],
                    'password' => '123456',
                    'role_id' => 3,
                ];
            } elseif ($menu == 3) {
                $tabel = 'kelas';
                $data = [
                    'id_kelas' => $post['id_kelas'],
                    'kelas' => $post['nama'],
                ];
                $norm = true;
            } elseif ($menu == 4) {
                $tabel = 'pelajaran';
                $data = [
                    'id_pelajaran' => $post['id_pelajaran'],
                    'pelajaran' => $post['nama'],
                ];
                $norm = true;
            } elseif ($menu == 2) {
                $tabel = 'siswa';
                $data = [
                    'siswa' => $post['nama'],
                    'nisn' => $post['nisn'],
                    'nism' => $post['nism'],
                    'id_kelas' => $post['kelas'],
                ];
                $user = [
                    'nama' => $post['nama'],
                    'username' => $post['nisn'],
                    'password' => '123456',
                    'role_id' => 4,
                ];
            } elseif ($menu == 5) {
                $tabel = 'wali';
                $d = $this->db->get_where('guru', ['nip' => $post['nip']])->row_array();
                $data = [
                    'wali' => $d['guru'],
                    'nip' => $post['nip'],
                    'id_kelas' => $post['kelas'],
                    'id_pelajaran' => $d['id_pelajaran'],
                ];
                $userw = [
                    'role_id' => 2,
                ];
                $norm = true;
                $this->db->where('username', $post['nip']);
                $this->db->update('user', $userw);
            } elseif ($menu == 6) {
                $tabel = 'kompetensi';
                $data = [
                    'id_pelajaran' => $post['pelajaran'],
                    'kompetensi1' => $post['kompetensi1'],
                    'kompetensi2' => $post['kompetensi2'],
                    'kompetensi3' => $post['kompetensi3'],
                    'kompetensi4' => $post['kompetensi4'],
                    'kompetensi5' => $post['kompetensi5'],
                    'id_semester' => $post['semester'],
                    'tahun_ajaran' => $post['tahun'],
                ];
                $norm = true;
                $kom = true;
            }

            $this->db->insert($tabel, $data);
            if (!$norm) {
                $this->db->insert('user', $user);
            }
            if ($kom) {
                redirect('kelola/kelola/' . $menu . '/' . $post['pelajaran']);
            } else {
                redirect('kelola/kelola/' . $menu);
            }
        }
    }
}
