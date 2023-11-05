<?php

class Acara_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllSpk()
    {
        return $this->db->get('acara')->result_array();
    }

    public function getSpk($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name_a', $keyword);
            $this->db->like('name', $keyword);
            $this->db->or_like('phone',  $keyword);
            $this->db->or_like('date_a',  $keyword);
            $this->db->or_like('place_a',  $keyword);
            $this->db->or_like('w_lain',  $keyword);
            $this->db->or_like('photograper',  $keyword);
            $this->db->or_like('videograper',  $keyword);
            $this->db->or_like('crew',  $keyword);
        }
        return $this->db->get('acara',$limit,$start)->result_array();
    }

    public function countAllSpk()
    {
        return $this->db->get('acara')->num_rows();
    }

    function spk_edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('acara', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('acara');
    }
}
