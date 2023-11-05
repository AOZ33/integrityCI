<?php

class Date_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllAppointment()
    {
        return $this->db->get('appointment')->result_array();
    }
}
