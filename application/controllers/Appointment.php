<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Appointment_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Appointment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('appointment/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $checkboxes = $this->input->post('description');
        $appointment = implode(",", $checkboxes);
        $data = array(

            'name'  => $this->input->post('name'),
            'name_a'  => $this->input->post('name_a'),
            'package' => $this->input->post('package'),
            'description'  => $appointment,
            'photo_g'  => $this->input->post('photo_g'),
            'box' => $this->input->post('box'),
            'ukuran_p' => $this->input->post('ukuran_p'),
            'ukuran_w' => $this->input->post('ukuran_w'),
            'tambahan' => $this->input->post('tambahan'),
            'u20x30' => $this->input->post('u20x30'),
            'u25x30' => $this->input->post('u25x30'),
            'u30x30' => $this->input->post('u30x30'),
            'video'  => $this->input->post('video'),
            'lainnya'  => $this->input->post('lainnya'),
            'wedding_book'  => $this->input->post('wedding_book'),
            'address'  => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'instagram' => $this->input->post('instagram'),
            'price' => $this->input->post('price'),
            'dp' => $this->input->post('dp'),
            'nilai' => $this->input->post('nilai'),
            'uang' => $this->input->post('uang'),
            'date_l' => $this->input->post('date_l'),
            'w_lamaran' => $this->input->post('w_lamaran'),
            'place_l' => $this->input->post('place_l'),
            'date_p' => $this->input->post('date_p'),
            'w_prewed' => $this->input->post('w_prewed'),
            'date_w' => $this->input->post('date_w'),
            'w_akad' => $this->input->post('w_akad'),
            'w_resepsi' => $this->input->post('w_resepsi'),
            'date_m' => $this->input->post('date_m'),
            'w_siram' => $this->input->post('w_siram'),
            'place_m' => $this->input->post('place_m'),
            'date_s' => $this->input->post('date_s'),
            'w_live' => $this->input->post('w_live'),
            'place_s' => $this->input->post('place_s'),
            'date_a' => $this->input->post('date_a'),
            'n_acara' => $this->input->post('n_acara'),
            'w_lain' => $this->input->post('w_lain'),
            'place_p' => $this->input->post('place_p'),
            'place_w' => $this->input->post('place_w'),
            'place_a' => $this->input->post('place_a'),
            'date_dp' => $this->input->post('date_dp'),
            'date_n' => $this->input->post('date_n'),
            'date_u' => $this->input->post('date_u'),
            'more' => $this->input->post('more'),
            'more_p' => $this->input->post('more_p'),
            'more_w' => $this->input->post('more_w'),
            'more_m' => $this->input->post('more_m'),
            'more_s' => $this->input->post('more_s'),
            'more_a' => $this->input->post('more_a')
        );
        if ($_POST) {

            $this->Appointment_model->add($data);
            $this->session->set_flashdata('flash', 'Berhasil ditambahkan!');
            redirect('appointment/index');
        }
    }
}
