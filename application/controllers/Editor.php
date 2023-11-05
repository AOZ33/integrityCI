<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Editor_model');
    }

    public function index()
    {
        $data['title'] = 'SPK Editor';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->library('pagination');

        if ($this->input->post('submit')) {
           $data['keyword'] = $this->input->post('keyword');
           $this->session->set_userdata('keyword', $data['keyword']);
        }else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/NESNUMOTO/integrity/editor/index';
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('date_w', $data['keyword']);
        $this->db->or_like('date_r', $data['keyword']);
        $this->db->or_like('date_m', $data['keyword']);
        $this->db->or_like('date_s', $data['keyword']);
        $this->db->or_like('editor', $data['keyword']);
        $this->db->or_like('category', $data['keyword']);
        $this->db->from('editor');
        
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
        $data['surat'] = $this->Editor_model->getSpk($config['per_page'],$data['start'],$data['keyword']);
        $data['gaji_e'] = $this->Editor_model->getGaji_e();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('editor/index', $data);
        $this->load->view('templates/footer');
    }
    function spk_edit()
    {
        $id = $this->input->post('id');
        $editor = $this->input->post('editor');
        $edr = implode(",", $editor);
        $data = array(
            'name'  => $this->input->post('name'),
            'date_w' => $this->input->post('date_w'),
            'date_r' => $this->input->post('date_r'),
            'date_m' => $this->input->post('date_m'),
            'date_s' => $this->input->post('date_s'),
            'editor'  => $edr,
            'category' => $this->input->post('category'),
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Editor_model->spk_edit($data, $id);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('editor/index');
        }
    }

    function hapus_data($id)
    {
        $this->Editor_model->hapus_data($id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('editor/index');
    }
}
