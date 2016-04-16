<?php


class Projects_model extends CI_Model
{
    public function getAllProjects()
    {
        $projects = $this->db->select('cat.name AS cat_name, cat.id AS cat_ID, pr.name AS pr_name, pr.id AS pr_ID')
            ->join('projects AS pr', 'pr.id = rel.project_ID')
            ->join('category AS cat', 'cat.id = rel.category_ID')
            ->get('project_category_rel AS rel');
        return $projects->result_array();
    }

    public function getByID($id)
    {
        $project = $this->db->select('cat.name AS cat_name, cat.id AS cat_ID, pr.name AS pr_name, pr.id AS pr_ID')
            ->join('projects AS pr', 'pr.id = rel.project_ID', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->where('rel.project_ID', $id)
            ->get('project_category_rel AS rel');
        return $project->result_array();
    }
}