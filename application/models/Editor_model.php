<?php

class Editor_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllSpk()
    {
        return $this->db->get('editor')->result_array();
    }

    public function getSpk($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('date_w',  $keyword);
            $this->db->or_like('date_r',  $keyword);
            $this->db->or_like('date_m',  $keyword);
            $this->db->or_like('date_s',  $keyword);
            $this->db->or_like('editor',  $keyword);
            $this->db->or_like('category',  $keyword);
        }
        return $this->db->get('editor',$limit,$start)->result_array();
    }

    public function getGaji_e()
    {
        return $this->db->get('gaji_e')->result_array();
    }

    public function countAllSpk()
    {
        return $this->db->get('editor')->num_rows();
    }

    function spk_edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('editor', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('editor');
    }
}
