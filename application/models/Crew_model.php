<?php

class Crew_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllCrew()
    {
        return $this->db->get('crew')->result_array();
    }

    function add($data)
    {
        $this->db->insert('crew', $data);
        return TRUE;
    }

    function edit_barang($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('crew', $data);
        return TRUE;
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('crew');
    }
}
