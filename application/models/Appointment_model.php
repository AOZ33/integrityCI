<?php

class Appointment_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    function add($data)
    {
        $this->db->insert('appointment', $data);
        return TRUE;
    }
}
