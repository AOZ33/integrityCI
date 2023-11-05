<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Spk_model');
    }

    function spk_lamar()
    {
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

            $this->Spk_model->spk_lamar($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_lamar($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['lamaran'] = $this->Spk_model->detail_lamar($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lamaran/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_prewed()
    {
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date' => $this->input->post('date'),
            'place_p' => $this->input->post('place_p'),
            'w_prewed' => $this->input->post('w_prewed'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_prewed($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_prewed($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['prewedding'] = $this->Spk_model->detail_prewed($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('prewedding/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_wed()
    {
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date_w' => $this->input->post('date_w'),
            'w_akad' => $this->input->post('w_akad'),
            'w_resepsi' => $this->input->post('w_resepsi'),
            'place_w' => $this->input->post('place_w'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_wed($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_wed($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['wedding'] = $this->Spk_model->detail_wed($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('wedding/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_pengaji()
    {
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date_m' => $this->input->post('date_m'),
            'w_siram' => $this->input->post('w_siram'),
            'place_m' => $this->input->post('place_m'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_pengaji($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_pengaji($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['pengajian'] = $this->Spk_model->detail_pengaji($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajian/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_live()
    {
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date_s' => $this->input->post('date_s'),
            'w_live' => $this->input->post('w_live'),
            'place_s' => $this->input->post('place_s'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_live($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_live($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['live'] = $this->Spk_model->detail_live($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('live/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_lain()
    {
        $photo = $this->input->post('photograper');
        $pth = implode(",", $photo);
        $video = $this->input->post('videograper');
        $vidh = implode(",", $video);
        $crew = $this->input->post('crew');
        $crw = implode(",", $crew);
        $data = array(
            'name_a'  => $this->input->post('name_a'),
            'name'  => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'date_a' => $this->input->post('date_a'),
            'w_lain' => $this->input->post('w_lain'),
            'place_a' => $this->input->post('place_a'),
            'photograper'  => $pth,
            'videograper'  => $vidh,
            'crew'  => $crw,
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_lain($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_lain($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['acara'] = $this->Spk_model->detail_lain($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('acara/detail', $data);
        $this->load->view('templates/footer');

    }

    function spk_edit()
    {
        $edit = $this->input->post('editor');
        $edt = implode(",", $edit);
        $data = array(
            'name'  => $this->input->post('name'),
            'date_w' => $this->input->post('date_w'),
            'date_r' => $this->input->post('date_r'),
            'date_m' => $this->input->post('date_m'),
            'date_s' => $this->input->post('date_s'),
            'editor'  => $edt,
            'category' => $this->input->post('category'),
            'note' => $this->input->post('note')
        );
        if ($_POST) {

            $this->Spk_model->spk_edit($data);
            $this->session->set_flashdata('notif', '<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('data/index');
        }
    }

    function detail_edit($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['editor'] = $this->Spk_model->detail_edit($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('editor/detail', $data);
        $this->load->view('templates/footer');

    }
}
