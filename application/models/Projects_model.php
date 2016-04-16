<?php


class Projects_model extends CI_Model
{
    public function getAllProjects()
    {
        $projects = $this->db->select('f.filename, pr.name AS pr_name, 
                                    pr.id AS pr_ID, user.user_id AS u_id, user.email AS u_email, 
                                    user.avatar AS avatar, GROUP_CONCAT(DISTINCT cat.name) AS cat_name, GROUP_CONCAT(DISTINCT cat.id) AS cat_id')
            ->join('project_category_rel AS rel', 'rel.project_ID = pr.id', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->join('files AS f', 'f.project_id = pr.id')
            ->group_by('pr.id')
            ->get('projects AS pr');
        return $projects->result_array();
    }

    public function getByID($id)
    {
        $project = $this->db->select('pr.name AS pr_name, pr.id AS pr_ID, 
        GROUP_CONCAT(DISTINCT f.filename) as img,
        user.user_id AS u_id, user.email AS u_email, user.avatar AS avatar, GROUP_CONCAT(DISTINCT cat.name) AS cat_name, GROUP_CONCAT(DISTINCT cat.id) AS cat_id')
            ->join('projects AS pr', 'pr.id = rel.project_ID', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->join('files AS f', 'f.project_id = pr.id')
            ->where('rel.project_ID', $id)
            ->group_by('pr.id')
            ->get('project_category_rel AS rel');
        return $project->result_array();
    }

    public function insert()
    {
        $data = array(
            'name' => $this->input->post('project_name'),
            'description' =>  $this->input->post('project_description'),
            'user_id'       => $_SESSION['user_id'],
            'date_added'    => date('Y-m-d')
        );

       $this->db->insert('projects', $data);
       $return['id'] = $this->db->insert_id();
        return $return;
    }

    public function insert_project_file($filename, $org_filename, $type, $project_id)
    {
        $data = array(
            'user_id' => $_SESSION['user_id'],
            'file_key' =>  1,
            'filename'    => $filename,
            'org_filename'  => $org_filename,
            'file_type' => $type,
            'project_id' => $project_id
        );

        $this->db->insert('files', $data);
    }

    public function insert_project_cat($category, $project)
    {
        $data = array(
            'category_ID' => $category,
            'project_ID' => $project,
            'date_added'    => date('Y-m-d')
        );

        $this->db->insert('project_category_rel', $data);
    }

}