<?php

class live_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllSpk()
    {
        return $this->db->get('live')->result_array();
    }

    public function getSpk($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('phone',  $keyword);
            $this->db->or_like('date_s',  $keyword);
            $this->db->or_like('place_s',  $keyword);
            $this->db->or_like('w_live',  $keyword);
            $this->db->or_like('photograper',  $keyword);
            $this->db->or_like('videograper',  $keyword);
            $this->db->or_like('crew',  $keyword);
        }
        return $this->db->get('live',$limit,$start)->result_array();
    }

    public function countAllSpk()
    {
        return $this->db->get('live')->num_rows();
    }

    function spk_edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('live', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('live');
    }
}
