<?php

class Wedding_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllSpk()
    {
        return $this->db->get('wedding')->result_array();
    }

    public function getSpk($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('phone',  $keyword);
            $this->db->or_like('date_w',  $keyword);
            $this->db->or_like('w_akad',  $keyword);
            $this->db->or_like('w_resepsi',  $keyword);
            $this->db->or_like('place_w',  $keyword);
            $this->db->or_like('photograper',  $keyword);
            $this->db->or_like('videograper',  $keyword);
            $this->db->or_like('crew',  $keyword);
        }
        return $this->db->get('wedding',$limit,$start)->result_array();
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

    public function countAllSpk()
    {
        return $this->db->get('wedding')->num_rows();
    }

    function spk_edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('wedding', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('wedding');
    }
}
