<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Techmeet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Techmeet_model');
    }

    public function index()
    {
        $data['title'] = 'Techmeet';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->library('pagination');

        if ($this->input->post('submit')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        }else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/NESNUMOTO/integrity/techmeet/index/';
        $this->db->like('name', $data['keyword']);
        $this->db->from('techmeet');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 12;
        
        $config['full_tag_open'] = '<nav aria-label="Page navigation example">
        <ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';
        
        $config['first_link'] = ' First';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';
        
        $config['last_link'] = ' Last';
        $config['last_tag_open'] = ' <li class="page-item">';
        $config['last_tag_close'] = ' </li>';
        
        $config['next_link'] = ' &raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';
        
        $config['prev_link'] = ' &laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = ' </li>';
        
        $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = ' </a></li>';
        
        $config['num_tag_open'] = ' <li class="page-item ">';
        $config['num_tag_close'] = ' </li>';
        
        $config['attributes'] = array('class'=>'page-link');
      
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['card'] = $this->Techmeet_model->getTechmeet($config['per_page'],$data['start'],$data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('techmeet/index', $data);
        $this->load->view('templates/footer');
    }


    function edit_techmeet($id)

    {

        $data['title'] = 'Form Technical Meeting';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['techmeet'] = $this->Techmeet_model->edit_techmeet($id);



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('techmeet/edit', $data);
        $this->load->view('templates/footer');

    }

    function edit()
    {
        $id = $this->input->post('id');
        $data = array(
            'name'  => $this->input->post('name'),
            'date_w'  => $this->input->post('date_w'),
            'w_akad' => $this->input->post('w_akad'),
            'w_resepsi'  => $this->input->post('w_resepsi'),
            'place_w' => $this->input->post('place_w'),
            'package' => $this->input->post('package'),
            'date_s' => $this->input->post('date_s'),
            'place_s' => $this->input->post('place_s'),
            'w_pengsir' => $this->input->post('w_pengsir'),
            'tim' => $this->input->post('tim'),
            'fotograper' => $this->input->post('fotograper'),
            'videograper'  => $this->input->post('videograper'),
            'crew'  => $this->input->post('crew'),
            'u_prewedd'  => $this->input->post('u_prewedd'),
            'u_prewedd4r'  => $this->input->post('u_prewedd4r'),
            'item' => $this->input->post('item'),
            'video' => $this->input->post('video'),
            'place_m' => $this->input->post('place_m'),
            'w_makeup' => $this->input->post('w_makeup'),
            'box' => $this->input->post('box'),
            'ukuran_a' => $this->input->post('ukuran_a'),
            'ukuran_w' => $this->input->post('ukuran_w'),
            'vid_h' => $this->input->post('vid_h'),
            'vid_wedding' => $this->input->post('vid_wedding'),
            'note' => $this->input->post('note')

        );
        if ($_POST) {

            $this->Techmeet_model->edit($data, $id);
            $this->session->set_flashdata('flash', 'Data Berhasil diubah');

            redirect('techmeet/index');
        }
    }

    function delete_techmeet($id)
    {
        $this->Techmeet_model->delete_techmeet($id);
        $this->session->set_flashdata('flash', 'Data Berhasil dihapus!');
        redirect('techmeet/index');
    }

    function detail_techmeet($id)

    {

        $data['title'] = 'Form Technical Meeting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); 

        $data['techmeet'] = $this->Techmeet_model->detail($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('techmeet/detail', $data);
        $this->load->view('templates/footer');



    }
}
