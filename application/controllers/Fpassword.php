<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fpassword extends CI_Controller {
  
  public function index(){
    if (isset($_SESSION['user_id'])){ header("Location: home"); }
    $this->load->view('header');
    $this->load->view('fpassword_view');
    $this->load->view('footer');
  }
  
  public function new_password(){
    $response=array();
    $email=trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $response['errors'][]='email'; }
    else{
      $this->load->model('users_model');
      $user=$this->users_model->get_user(array('email'=>$email));
      if (!$user) $response['busy_mail']='';
      else{
        $newpass=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'),0,10);
        $subject='Нова парола';
        $message='Здравейте '.$user['first_name'].' '.$user['last_name'].',<br/>Вашата нова парола е: '.
                  $newpass.'<br/><br/>Искрено Ваш,<br/>Екипът на Killer error';
        $headers="MIME-Version: 1.0\r\n";
        $headers.="Content-type: text/html\r\n";
        $headers.="From: ErrorKiller <admin@killererror.com>\r\n";
        $headers.="Reply-To: admin@killererror.com\r\nX-Mailer: PHP/".phpversion();
//        mail($email, $subject, $message, $headers);
//        $this->users_model->set_user(array('password'=>md5($newpass)),array('user_id'=>$user['user_id']));
        $response['fpassword']='';
      }
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }
}
