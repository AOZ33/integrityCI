<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Data extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('Data_model');
        $this->load->model('Spk_model');
        $this->load->library('form_validation');

    }



    public function index()

    {

        $data['title'] = 'Data Appointment';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        

        $this->load->library('pagination');



        if ($this->input->post('submit')) {

           $data['keyword'] = $this->input->post('keyword');

           $this->session->set_userdata('keyword', $data['keyword']);

        }else {

            $data['keyword'] = $this->session->userdata('keyword');

        }



        $config['base_url'] = 'http://localhost/NESNUMOTO/integrity/data/index/';

        $this->db->like('name', $data['keyword']);

        $this->db->or_like('description', $data['keyword']);

        $this->db->or_like('n_acara', $data['keyword']);

        $this->db->or_like('date_l', $data['keyword']);

        $this->db->or_like('date_p', $data['keyword']);

        $this->db->or_like('date_w', $data['keyword']);

        $this->db->or_like('date_m', $data['keyword']);

        $this->db->or_like('date_s', $data['keyword']);

        $this->db->or_like('date_a', $data['keyword']);

        $this->db->from('appointment');



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

        $data['appointment'] = $this->Data_model->getAppointment($config['per_page'],$data['start'],$data['keyword']);
        $data['gaji'] = $this->Data_model->getGaji();
        $data['gaji_v'] = $this->Data_model->getGaji_v();
        $data['gaji_c'] = $this->Data_model->getGaji_c();
        $data['gaji_e'] = $this->Data_model->getGaji_e();


        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);

        $this->load->view('templates/topbar', $data);

        $this->load->view('data/index', $data);

        $this->load->view('templates/footer');

    }



    public function pdf()

    {

        $this->load->library('dompdf_gen');



        $data['appointment'] = $this->Data_model->getAllAppointment('appointment')->result();

        

        $this->load->view('print_pdf',$data);



        $paper_size = 'A4';

        $orientation = 'portrait';

        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);



        $this->dompdf->load_html($html);

        $this->dompdf->render();

        $this->dompdf->stream("print_data.pdf", array('Attachment' =>0));

    }



    function edit_barang()

    {

        $id = $this->input->post('id');

        $checkboxes = $this->input->post('description');

        $event = implode(",", $checkboxes);

        $data = array(

            'name'  => $this->input->post('name'),

            'name_a'  => $this->input->post('name_a'),

            'package' => $this->input->post('package'),

            'description'  => $event,

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



            $this->Data_model->edit_barang($data, $id);

            $this->session->set_flashdata('flash', 'Data Berhasil diubah');

            redirect('data/index');

        }

    }





    function hapus_data($id)

    {

        $this->Data_model->hapus_data($id);

        $this->session->set_flashdata('flash', 'Data Berhasil dihapus!');

        redirect('data/index');

    }

    

    function detail($id)

    {

        $data['title'] = 'Data Client';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        

        $data['appointment'] = $this->Data_model->detail($id);



        $this->load->view('templates/header', $data);

        $this->load->view('templates/sidebar', $data);

        $this->load->view('templates/topbar', $data);

        $this->load->view('data/detail', $data);

        $this->load->view('templates/footer');



    }
    
    function techmeet($id)

    {

        $data['title'] = 'Form Technical Meeting';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['appointment'] = $this->Data_model->techmeet($id);



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/techmeet', $data);
        $this->load->view('templates/footer');

    }
    
    function add_techmeet()

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

            'note' => $this->input->post('note'),

        );

        if ($_POST) {

            $this->Data_model->add_techmeet($data, $id);

            $this->session->set_flashdata('flash', 'Data Berhasil ditambahkan');

            redirect('techmeet/index');

        }

    }

}

