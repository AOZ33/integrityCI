<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lamaran_model');
    }

    public function index()
    {
        $data['title'] = 'Data Spk Lamaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->library('pagination');

        if ($this->input->post('submit')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        }else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        
        $config['base_url'] = 'http://localhost/NESNUMOTO/integrity/lamaran/index/';
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('phone', $data['keyword']);
        $this->db->or_like('date_l', $data['keyword']);
        $this->db->or_like('place_l', $data['keyword']);
        $this->db->or_like('w_lamaran', $data['keyword']);
        $this->db->or_like('photograper', $data['keyword']);
        $this->db->or_like('videograper', $data['keyword']);
        $this->db->or_like('crew', $data['keyword']);
        $this->db->from('lamaran');
        
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
        $data['surat'] = $this->Lamaran_model->getSpk($config['per_page'],$data['start'],$data['keyword']);
        $data['gaji'] = $this->Lamaran_model->getGaji();
        $data['gaji_v'] = $this->Lamaran_model->getGaji_v();
        $data['gaji_c'] = $this->Lamaran_model->getGaji_c();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lamaran/index', $data);
        $this->load->view('templates/footer');
    }

    function spk_edit()
    {
        $id = $this->input->post('id');
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date_l' => $this->input->post('date_l'),
            'place_l' => $this->input->post('place_l'),
            'w_lamaran' => $this->input->post('w_lamaran'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Lamaran_model->spk_edit($data, $id);
            $this->session->set_flashdata('flash', 'Data Berhasil diubah');
            redirect('lamaran/index');
        }
    }

    function hapus_data($id)
    {
        $this->Lamaran_model->hapus_data($id);
        $this->session->set_flashdata('flash', 'Data Berhasil dihapus!');
        redirect('lamaran/index');
    }
}
