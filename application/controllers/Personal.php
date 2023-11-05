<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Spk_model');
    }
    //Untuk Prewedding
    function personal($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['prewedding'] = $this->Spk_model->detail_prewed($id);
        $data['gaji'] = $this->Spk_model->detail_gaji($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index', $data);
        $this->load->view('templates/footer');

    }
    function personal_v($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['prewedding'] = $this->Spk_model->detail_prewed($id);
        $data['gaji_v'] = $this->Spk_model->detail_gaji_v($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_v', $data);
        $this->load->view('templates/footer');

    }
    function personal_c($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['prewedding'] = $this->Spk_model->detail_prewed($id);
        $data['gaji_c'] = $this->Spk_model->detail_gaji_c($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_c', $data);
        $this->load->view('templates/footer');

    }

    //Untuk Lamaran
    function p_lamar_f($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['lamaran'] = $this->Spk_model->detail_lamar($id);
        $data['gaji'] = $this->Spk_model->detail_gaji($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_l_f', $data);
        $this->load->view('templates/footer');

    }
    function p_lamar_v($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['lamaran'] = $this->Spk_model->detail_lamar($id);
        $data['gaji_v'] = $this->Spk_model->detail_gaji_v($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_l_v', $data);
        $this->load->view('templates/footer');

    }
    function p_lamar_c($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['lamaran'] = $this->Spk_model->detail_lamar($id);
        $data['gaji_c'] = $this->Spk_model->detail_gaji_c($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_l_c', $data);
        $this->load->view('templates/footer');

    }
    
    //Untuk Wedding
    function p_wedding_f($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['wedding'] = $this->Spk_model->detail_wed($id);
        $data['gaji'] = $this->Spk_model->detail_gaji($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_w_f', $data);
        $this->load->view('templates/footer');

    }
    function p_wedding_v($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['wedding'] = $this->Spk_model->detail_wed($id);
        $data['gaji_v'] = $this->Spk_model->detail_gaji_v($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_w_v', $data);
        $this->load->view('templates/footer');

    }
    function p_wedding_c($id,$row)
    {
        $data['title'] = 'Personal Spk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $row;
        $data['wedding'] = $this->Spk_model->detail_wed($id);
        $data['gaji_c'] = $this->Spk_model->detail_gaji_c($nama);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personal/index_w_c', $data);
        $this->load->view('templates/footer');

    }

}
