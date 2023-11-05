<?php

class Videograper_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllVideograper()
    {
        return $this->db->get('videograper')->result_array();
    }

    function add($data)
    {
        $this->db->insert('videograper', $data);
        return TRUE;
    }

    function edit_barang($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('videograper', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('videograper');
    }
}
