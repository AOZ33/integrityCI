<?php

class Password_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getUser($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id', $keyword);
            $this->db->or_like('name',  $keyword);
            $this->db->or_like('email',  $keyword);
            $this->db->or_like('image',  $keyword);
            $this->db->or_like('password',  $keyword);
            $this->db->or_like('rolde_id',  $keyword);
            $this->db->or_like('is_active',  $keyword);
            $this->db->or_like('date_created',  $keyword);
        }
        return $this->db->get('user', $limit, $start)->result_array();
    }
    public function countAllUser()
    {
        return $this->db->get('user')->num_rows();
    }

    function edit_password($data, $email2)
    {
        $this->db->where('email', $email2);
        $this->db->update('user', $data);
        return TRUE;
    }
}
