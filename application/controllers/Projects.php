<?php

class Projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->model('Projects_model');
    }
    public function index()
    {
        $category = $this->Category_model->getAllCategory();
        $projects = $this->Projects_model->getAllProjects();
        echo "<h1>Projects:</h1>";
//        foreach ($projects as $project) {
//            echo $project['name'];
//        }
        echo "<pre>";
        print_r($projects);
        echo "</pre>";

        echo "<hr/>";
        echo "<h1>Categories:</h1>";
        foreach ($category as $item) {
            echo $item['name']. '<br />';
        }
    }

    public function show($id)
    {
        $project = $this->Projects_model->getByID($id);
        if($project){
            echo "<pre>";
            print_r($project);
            echo "</pre>";
        }

    }
}