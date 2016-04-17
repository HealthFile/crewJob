<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
  public function index(){
    if (!isset($_SESSION['user_id'])) { header("Location: home"); }
    else{
      $this->load->model('users_model');
      $this->load->model('portfolio_model');
      $data['user']=$this->users_model->get_user(array('user_id'=>$_SESSION['user_id']));
      $data['links']=$this->portfolio_model->get_links(array('user_id'=>$_SESSION['user_id']));
      $data['files']=$this->portfolio_model->get_files(array('user_id'=>$_SESSION['user_id']));
      $this->load->model('users_model');
      $this->load->view('header');
      $this->load->view('portfolio_view',$data);
      $this->load->view('footer');
    }
  }
  
  public function user_data(){
    $response['message']='Промените са записани успешно!';
    $data['user_name']=trim($_POST['usr_name']);
    if ($_POST['gender']=='0'){ $data['gender']=0; }
    if ($_POST['gender']=='1') { $data['gender']=1; }
    if ($_POST['gender']=='2') { $data['gender']=2; }
    if ($_POST['birth_date']) { $data['date_of_birth']=date('Y-m-d',strtotime($_POST['birth_date'])); }
    $data['user_note']=$_POST['user_note'];
    $this->load->model('users_model');
    $this->users_model->set_user($data,array('user_id'=>$_SESSION['user_id']));
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
  public function add_link(){
    $response=array();
    if (!trim($_POST['link_note'])){ $response['errors'][]='link_note'; }
    if (!filter_var($_POST['link'], FILTER_VALIDATE_URL)){ $response['errors'][]='link'; }
    if (!isset($response['errors'])){
      $this->load->model('portfolio_model');
      $response['new_link']=$this->portfolio_model->add_link(array('user_id'=>$_SESSION['user_id'],
                                                                   'link_note'=>trim($_POST['link_note']),
                                                                   'link'=>trim($_POST['link']))
                                                                   );
      '';
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }

  public function delete_link(){
    $this->load->model('portfolio_model');
    $this->portfolio_model->delete_link(array('link_id'=>$_POST['link_id'],'user_id'=>$_SESSION['user_id']));
    $response['success']=true;
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
  public function add_file(){
    $config['upload_path']='assets/uploads/';
    $config['allowed_types']='*';
    $config['max_size']=10000;
    $this->load->library('upload',$config);
    $response['success']=false;
    if ($this->upload->do_upload('file')){
      $this->db->insert('files',array('user_id'=>$_SESSION['user_id'],
                                      'file_key'=>0,
                                      'filename'=>$this->upload->data('file_name'),
                                      'org_filename'=>$this->upload->data('orig_name'),
                                      'file_type'=>$this->upload->data('file_ext'))
      );
      $response['success']=true;
      $response['filename']=$this->upload->data('orig_name');
      $response['id_file']=$this->db->insert_id();
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
  public function delete_file(){
    $this->load->model('portfolio_model');
    $response['success']=$this->portfolio_model->delete_file(array('id'=>$_POST['file_id'],'user_id'=>$_SESSION['user_id']));
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
  public function change_pass(){
    $password=trim($_POST['password']);
    if (strlen($password)<4) { $response['errors'][]='password'; }
    if (trim($_POST['cpass']) != $password) { $response['errors'][]='cpass'; }
    if (!isset($response['errors'])){
      $this->db->update('users',array('password'=>md5($password)),array('user_id'=>$_SESSION['user_id']));
      $response['message']='Паролата е сменена!';
    }
    header('Content-Type: application/json');
    echo json_encode($response);
  }
  
}
