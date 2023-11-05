<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {

        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if($this->form_validation->run() == false ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profile/index', $data);
            $this->load->view('templates/footer');
        } else {
		
       		$name = $this->input->post('name');
		$email = $this->input->post('email');	
		
		$upload_image = $_FILES['image']['name'];

		if($upload_image) {

		$config['allowed_types'] = 'gif|jpg|png';	
		$config['max_size'] = '2048';
		$config['upload_path'] = '.assets/img/profile/';

		$this->load->library('upload', $config);

		if($this->upload->do_upload('image')) {
			$new_image = $this->upload->data('file_name');
			$this->db->set('image', $new_image);
		} else {
			echo $this->upload->display_errors();
		}

		}
		
		$this->db->set('name', $name);
		$this->db->where('email', $email);
		$this->db->update('user');

 		$this->session->set_flashdata('flash', 'Berhasil diubah!');
            	redirect('profile/myindex');

      }


    }

	public function myindex()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
          
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profile/myindex', $data);
        $this->load->view('templates/footer');
    }
}
