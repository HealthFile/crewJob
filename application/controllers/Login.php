<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function index(){
    if (isset($_SESSION['user_id'])) { header("Location: home"); }
    else{ 
      $this->load->view('header');
      $this->load->view('log-in');
      $this->load->view('footer');
    }
  }
}
