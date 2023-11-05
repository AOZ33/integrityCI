<?php

class Calendar_Model extends CI_Model
{
    function fecth_all_event(){
        $this->db->order_by('id');
        return $this->db->get('appointment');
    }
}

?>