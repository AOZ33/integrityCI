<?php

class User_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function hitungJumlahKlien()
    {   
        $query = $this->db->get('appointment');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahUser()
    {   
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahTech()
    {   
        $query = $this->db->get('techmeet');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahLmn()
    {   
        $query = $this->db->get('lamaran');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahPwd()
    {   
        $query = $this->db->get('prewedding');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahWd()
    {   
        $query = $this->db->get('wedding');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahPs()
    {   
        $query = $this->db->get('pengajian');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahLive()
    {   
        $query = $this->db->get('live');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahEdt()
    {   
        $query = $this->db->get('editor');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
    public function hitungJumlahAcr()
    {   
        $query = $this->db->get('acara');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }
}
