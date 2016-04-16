<?php


class Projects_model extends CI_Model
{
    public function getAllProjects()
    {
        $projects = $this->db->select('cat.name AS cat_name, cat.id AS cat_ID, pr.name AS pr_name, 
                                    pr.id AS pr_ID, user.user_id AS u_id, user.email AS u_email, 
                                    user.avatar AS avatar')
            ->join('project_category_rel AS rel', 'rel.project_ID = pr.id', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->get('projects AS pr');
        return $projects->result_array();
    }

    public function getByID($id)
    {
        $project = $this->db->select('cat.name AS cat_name, cat.id AS cat_ID, pr.name AS pr_name, pr.id AS pr_ID, 
        user.user_id AS u_id, user.email AS u_email, user.avatar AS avatar')
            ->join('projects AS pr', 'pr.id = rel.project_ID', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->where('rel.project_ID', $id)
            ->get('project_category_rel AS rel');
        return $project->result_array();
    }
}