<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index() 
    {    
        if ($this->session->userdata('username')) {
        redirect('home');
        }
        $rules = [
        [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|trim'
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|trim'
        ]
        ];

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login!";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($password === $user['password']) {
        $data = [
            'username' => $user['username'],
            'nama' => $user['nama'],
            'role_id' => $user['role_id']
        ];

        $this->session->set_userdata($data);
        redirect('home');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-pesan">Password salah!!</div>');
            redirect('auth');
        }
    }

    public function logout()
	{
		$data = ['username', 'nama', 'role_id'];
		$this->session->unset_userdata($data);
        redirect('auth');
    }
}