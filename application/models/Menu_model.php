<?php
class Menu_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` =`user_menu`.`id`       
                     ";
        return $this->db->query($query)->result_array();
    }

    function editmenu($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);
        return TRUE;
    }
    function editsubmenu($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu', $data);
        return TRUE;
    }
    function hapusmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
    function hapussubmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }
}
