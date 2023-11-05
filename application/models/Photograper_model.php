<?php

class Photograper_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllPhotograper()
    {
        return $this->db->get('photograper')->result_array();
    }

    function add($data)
    {
        $this->db->insert('photograper', $data);
        return TRUE;
    }

    function edit_barang($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('photograper', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('photograper');
    }
}
