<?php

class Techmeet_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getTechmeet($limit,$start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
        }
        return $this->db->get('techmeet',$limit,$start)->result_array();
    }

    public function countAllTechmeet()
    {
        return $this->db->get('techmeet')->num_rows();
    }

    function edit_techmeet($id)
    {
        return $this->db->get_where('techmeet',['id' => $id])->row_array();
    }

    function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('techmeet', $data);
        return TRUE;
    }
    function delete_techmeet($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('techmeet');
    }
    function detail($id)
    {
        return $this->db->get_where('techmeet',['id' => $id])->row_array();
    }
}
