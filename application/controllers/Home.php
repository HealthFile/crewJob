<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function index(){
    $this->load->model('Category_model');
    $this->load->model('Projects_model');

    $data['last_projects'] = $this->Projects_model->get_with_limit(6);
    for ($i = 0; $i < count($data['last_projects']); $i++){
      $data['last_projects'][$i]['pr_description'] = $this->Projects_model->short_text('80',
          $data['last_projects'][$i]['pr_description']);
    }
    $this->load->view('header');
    $this->load->view('home_view', $data);
    $this->load->view('footer');
  }
}

