<?php


class Projects_model extends CI_Model
{
    public function getAllProjects()
    {
        $projects = $this->db->select('f.filename, pr.name AS pr_name, pr.description AS pr_description,
                                    pr.id AS pr_ID, user.user_id AS u_id, user.email AS u_email, 
                                    user.avatar AS avatar, GROUP_CONCAT(DISTINCT cat.name) AS cat_name, GROUP_CONCAT(DISTINCT cat.id) AS cat_id')
            ->join('project_category_rel AS rel', 'rel.project_ID = pr.id', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->join('files AS f', 'f.project_id = pr.id', 'left')
            ->group_by('pr.id')
            ->get('projects AS pr');
        return $projects->result_array();
    }

    public function getByID($id)
    {
        $project = $this->db->select('pr.name AS pr_name, pr.id AS pr_ID, pr.description AS pr_description,
        GROUP_CONCAT(DISTINCT f.filename) as img,
        user.user_id AS u_id, user.email AS u_email, user.user_name as username, user.avatar AS avatar, GROUP_CONCAT(DISTINCT cat.name) AS cat_name, GROUP_CONCAT(DISTINCT cat.id) AS cat_id,
         GROUP_CONCAT(DISTINCT cat.icon) AS cat_icon')
            ->join('projects AS pr', 'pr.id = rel.project_ID', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->join('files AS f', 'f.project_id = pr.id', 'left')
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

    public function insert_project_file($filename, $org_filename, $type, $project_id, $key, $crop)
    {
        $data = array(
            'user_id' => $_SESSION['user_id'],
            'file_key' =>  $key,
            'filename'    => $filename,
            'org_filename'  => $org_filename,
            'file_type' => $type,
            'project_id' => $project_id,
            'crop_file' => $crop
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

    public function get_with_limit($limit)
    {
        $projects = $this->db->select('f.filename, pr.name AS pr_name, pr.description AS pr_description,
                                    pr.id AS pr_ID, user.user_id AS u_id, user.email AS u_email, 
                                    user.avatar AS avatar, GROUP_CONCAT(DISTINCT cat.name) AS cat_name, GROUP_CONCAT(DISTINCT cat.id) AS cat_id')
            ->join('project_category_rel AS rel', 'rel.project_ID = pr.id', 'left')
            ->join('category AS cat', 'cat.id = rel.category_ID', 'left')
            ->join('users AS user', 'user.user_id = pr.user_id', 'left')
            ->join('files AS f', 'f.project_id = pr.id', 'left')
            ->group_by('pr.id')
            ->order_by('pr.id', 'DESC')
            ->limit($limit)
            ->get('projects AS pr');
        return $projects->result_array();
    }

    public function project_edit($project)
    {
        $project = $this->db->select('*, pr.id AS pr_ID, GROUP_CONCAT(DISTINCT f.filename) as images')
            ->join('files AS f', 'f.project_id = pr.id AND f.file_key = 1', 'left')
            ->where('pr.user_id', $_SESSION['user_id'])
            ->where('pr.id', $project)
            ->group_by('pr.id')
            ->get('projects AS pr');

        $projects['num'] = count($project->result_array());
        $projects['result'] = $project->result_array();
        return $projects;
    }

    public function update_project($id)
    {
        $response = $this->db->set('name', $this->input->post('project_name'))
            ->set('description', $this->input->post('project_description'))
            ->set('status', $this->input->post('status'))
            ->where('id', $id)
            ->where('user_id', $_SESSION['user_id'])
            ->update('projects');
//        $responses['redirect'] = 'projects';

//        header('Content-Type: application/json');
        return $response;
    }

    public function delete_project_image($id)
    {
        $this->db->delete('files', array('id' => $id));
    }

    public function get_project_file_by_id($id)
    {
        $file = $this->db->select('*')
            ->where('id', $id )
            ->get('files');
        return $file->row_array();
    }

    public function is_applyed($user_id, $project_id)
    {
        $count = $this->db->select('*')
            ->where('project_id', $project_id)
            ->where('user_id', $user_id )
            ->get('project_application');
        return $count->num_rows();
    }
    public function apply($id)
    {
        $array = array(
            'project_id' => $id,
            'user_id' => $_SESSION['user_id'],
            'date_added	' => date('Y-m-d')
        );

        $this->db->set($array);
        $ret = $this->db->insert('project_application');
        return $ret;
    }
    public function short_text($count, $text)
    {
        $title = $text;
        $pad = "...";

        if (strlen($title) >= ($count + 3)) {
            $title = substr($title, 0, $count) . $pad;
        }

        return $title;
    }
}