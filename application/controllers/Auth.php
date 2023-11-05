<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
	
    }

    public function index()
    {
	if ($this->session->userdata('email')) {
		redirect('data');
	}

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'NESNUMOTO | INTEGRITY';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {

            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password </div>');
                    redirect('auth');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This email has not been activated </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered </div>');
            redirect('auth');
        }
    }

    public function registration()
    {

	if ($this->session->userdata('email')) {
		
	}

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password did not match! ',
            'min_length' => 'Password at least 8 character'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password2]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registrartion';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' =>  2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Account has been created!, Please activate </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       You have been logout! </div>');
        redirect('auth');
    }

    public function reset_password()
    {
    if ($this->session->userdata('email')) {
		
	}
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
        // ]);
        // $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[8]|matches[password2]', [
        //     'matches' => 'Password did not match! ',
        //     'min_length' => 'Password at least 8 character'
        // ]);
        // $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password2]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Reset Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/reset-password');
            $this->load->view('templates/auth_footer');
        // } else {
        //     $email2 = [
        //         'email' => htmlspecialchars($this->input->post('email', true)),
        //     ];
        //     $data = [
        //         'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        //         'role_id' =>  2,
        //         'is_active' => 1,
        //         'date_created' => time()
        //     ];
        //     $this->db->set($data);
        //     $this->db->where('email', $email2);
        //     $this->db->update('user');
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        //     Password has been changed!, Please login with new password </div>');
        //     redirect('auth');
        }
    }

    public function forgot_password()
    {
        $data['title'] = 'Forgot Password';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forgot-password');
        $this->load->view('templates/auth_footer');
    }
}
