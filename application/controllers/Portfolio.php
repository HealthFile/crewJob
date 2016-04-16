<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
  public function index(){
    if (!isset($_SESSION['user_id'])) { header("Location: home"); }
    else{
      $this->load->model('users_model');
      $data['user']=$this->users_model->get_user(array('user_id'=>$_SESSION['user_id']));
      $this->load->model('users_model');
      $this->load->view('header');
      $this->load->view('portfolio_view',$data);
      $this->load->view('footer');
    }
  }

}
