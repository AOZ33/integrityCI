<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Date extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Date_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Appointment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['appointment'] = $this->Date_model->getAllAppointment();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('date/index', $data);
        $this->load->view('templates/footer');
    }
}
