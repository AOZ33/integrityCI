<?php

class Data_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllAppointment()
    {
        return $this->db->get('appointment')->result_array();
    }
    public function getAppointment($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('description',  $keyword);
            $this->db->or_like('n_acara',  $keyword);
            $this->db->or_like('date_l',  $keyword);
            $this->db->or_like('date_p',  $keyword);
            $this->db->or_like('date_w',  $keyword);
            $this->db->or_like('date_m',  $keyword);
            $this->db->or_like('date_s',  $keyword);
            $this->db->or_like('date_a',  $keyword);
        }
        return $this->db->get('appointment',$limit,$start)->result_array();
    }
    public function countAllAppointment()
    {
        return $this->db->get('appointment')->num_rows();
    }

    public function getGaji()
    {
        return $this->db->get('gaji')->result_array();
    }
    public function getGaji_v()
    {
        return $this->db->get('gaji_v')->result_array();
    }
    public function getGaji_c()
    {
        return $this->db->get('gaji_c')->result_array();
    }
    public function getGaji_e()
    {
        return $this->db->get('gaji_e')->result_array();
    }
    
    function edit_barang($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('appointment', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('appointment');
    }
    function detail($id)
    {
        return $this->db->get_where('appointment',['id' => $id])->row_array();
    }
    function techmeet($id)
    {
        return $this->db->get_where('appointment',['id' => $id])->row_array();
    }

    function add_techmeet($data)
    {
        $this->db->insert('techmeet', $data);
        return TRUE;
    }


}
