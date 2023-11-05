<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{
    public function __construct()

    {

        parent::__construct();

        $this->load->model('Password_model');
        $this->load->library('form_validation');
    }

    function edit_password()
    {
        if ($this->session->userdata('email')) {

        }
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password did not match! ',
            'min_length' => 'Password at least 8 character'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password2]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Reset Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/reset-password');
            $this->load->view('templates/auth_footer');        

        } else {
            $email2 = $this->input->post('email');

            $data = [
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];

            $this->Password_model->edit_password($data, $email2);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password has been changed!, Please login with new password </div>');
            redirect('auth');
        }
    }
}
