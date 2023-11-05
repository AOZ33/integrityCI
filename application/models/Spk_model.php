<?php

class Spk_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    function spk_lamar($data)
    {
        $this->db->insert('lamaran', $data);
        return TRUE;
    }

    function detail_lamar($id)
    {
        return $this->db->get_where('lamaran',['id' => $id])->row_array();
    }

    function spk_prewed($data)
    {
        $this->db->insert('prewedding', $data);
        return TRUE;
    }

    function detail_prewed($id)
    {
        return $this->db->get_where('prewedding',['id' => $id])->row_array();
    }

    function detail_gaji($nama)
    {
        return $this->db->get_where('gaji',['nama' => $nama])->row_array();
    }

    function detail_gaji_v($nama)
    {
        return $this->db->get_where('gaji_v',['nama' => $nama])->row_array();
    }

    function detail_gaji_c($nama)
    {
        return $this->db->get_where('gaji_c',['nama' => $nama])->row_array();
    }

    function spk_wed($data)
    {
        $this->db->insert('wedding', $data);
        return TRUE;
    }

    function detail_wed($id)
    {
        return $this->db->get_where('wedding',['id' => $id])->row_array();
    }
    function spk_pengaji($data)
    {
        $this->db->insert('pengajian', $data);
        return TRUE;
    }
    function detail_pengaji($id)
    {
        return $this->db->get_where('pengajian',['id' => $id])->row_array();
    }
    function spk_live($data)
    {
        $this->db->insert('live', $data);
        return TRUE;
    }
    function detail_live($id)
    {
        return $this->db->get_where('live',['id' => $id])->row_array();
    }
    function spk_lain($data)
    {
        $this->db->insert('acara', $data);
        return TRUE;
    }
    function detail_lain($id)
    {
        return $this->db->get_where('acara',['id' => $id])->row_array();
    }
    function spk_edit($data)
    {
        $this->db->insert('editor', $data);
        return TRUE;
    }
    function detail_edit($id)
    {
        return $this->db->get_where('editor',['id' => $id])->row_array();
    }
}
