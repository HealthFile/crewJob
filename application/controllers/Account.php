<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
  public function index(){
    if (isset($_SESSION['user_id'])) { header("Location: portfolio"); }
    else{ 
      $this->load->view('header');
      $this->load->view('account_view');
      $this->load->view('footer');
    }
  }
  
  public function add_user(){
    $response=array();
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $response['errors'][]='email'; }
    else{
      $this->load->model('users_model');
      if ($this->users_model->get_user(array('email'=>$email))){ $response['busy_mail']=''; }
    }
    if (strlen($password)<4) { $response['errors'][]='password'; }
    if (trim($_POST['cpass']) != $password) { $response['errors'][]='cpass'; }
    if (!isset($_POST['agree'])) { $response['errors'][]='agree'; }
    if (!isset($response['errors']) && !isset($response['busy_mail'])){
      $this->users_model->add_user(array('email'=>$email,'password'=>md5($password),'date_create'=>date('Y-m-d')));
//      $response['message']='Успешна регистрация!';
      $response['redirect']='portfolio';
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }

    public function login(){
    $response=array();
    $this->load->model('users_model');
    $user=$this->users_model->get_user(array('email'=>$_POST['user'],'password'=>md5($_POST['pass'])));
    if (!$user){ $response['no_user']=1; }
    else{
      $_SESSION['user_id']=$user['user_id'];
      $_SESSION['email']=$user['email'];
      $response['login']=<<<LGN
        <div id="user_name"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp; {$_SESSION['email']}</div>
        <button type="button" class="btn btn-danger btn-sm pull-right" onclick="json_sbm('account/logout','');">Изход</button>
        <div style="clear: both; height: 12px;"></div>
        <a href="account" class="pull-left"><span class="label label-default">Редакция профил</span></a>
        <a href="orders" class="pull-right"><span class="label label-default">Моите поръчки</span></a>
LGN;
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['order']);
    $response['redirect']='home';
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
}
