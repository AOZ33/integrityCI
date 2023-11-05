<?php

class Admin_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }
    public function getUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                    FROM `user` JOIN `user_role`
                    ON `user`.`role_id` =`user_role`.`id`       
                     ";
        return $this->db->query($query)->result_array();
    }
    function editrole($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        return TRUE;
    }
    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
