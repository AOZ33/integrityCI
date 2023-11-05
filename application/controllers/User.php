<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

 public function __construct()

    {

        parent::__construct();

        $this->load->model('User_model');

        $this->load->library('form_validation');

    }


    public function index()
    {

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['total_klien'] = $this->User_model->hitungJumlahKlien();
        $data['total_user'] = $this->User_model->hitungJumlahUser();	
        $data['total_techmeet'] = $this->User_model->hitungJumlahTech();	
        $data['total_lmn'] = $this->User_model->hitungJumlahLmn();	
        $data['total_pwd'] = $this->User_model->hitungJumlahPwd();	
        $data['total_wd'] = $this->User_model->hitungJumlahWd();	
        $data['total_ps'] = $this->User_model->hitungJumlahPs();	
        $data['total_live'] = $this->User_model->hitungJumlahLive();	
        $data['total_edt'] = $this->User_model->hitungJumlahEdt();	
        $data['total_acr'] = $this->User_model->hitungJumlahAcr();	
	
    
	    $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
}
