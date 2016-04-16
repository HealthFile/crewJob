<?php

class Projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projects_model');
    }
    public function index()
    {
        $category = $this->Projects_model->getAllCategory();
        foreach ($category as $item) {
            echo $item['name']. '<br />';
        }
    }

    public function show($id)
    {
        $cat = $this->Projects_model->getByID($id);

        if($cat){
            echo $cat[0]['name'];
        }

    }
}