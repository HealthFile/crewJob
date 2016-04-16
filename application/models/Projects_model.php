<?php


class Projects_model extends CI_Model
{
    public function getAllCategory()
    {
        $cat = $this->db->select('*')
            ->get('category');
        return $cat->result_array();
    }

    public function getByID($id)
    {
        $cat = $this->db->select('*')
                ->where('id', $id)
                ->get('category');
        return $cat->result_array();
    }
}