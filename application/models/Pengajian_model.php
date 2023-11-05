<?php

class Pengajian_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllSpk()
    {
        return $this->db->get('pengajian')->result_array();
    }

    public function getSpk($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('phone',  $keyword);
            $this->db->or_like('date_m',  $keyword);
            $this->db->or_like('place_m',  $keyword);
            $this->db->or_like('w_siram',  $keyword);
            $this->db->or_like('photograper',  $keyword);
            $this->db->or_like('videograper',  $keyword);
            $this->db->or_like('crew',  $keyword);
        }
        return $this->db->get('pengajian',$limit,$start)->result_array();
    }

    public function countAllSpk()
    {
        return $this->db->get('pengajian')->num_rows();
    }

    function spk_edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('pengajian', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengajian');
    }
}
