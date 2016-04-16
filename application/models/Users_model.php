<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model{
  
  public function get_user($where){
    $query=$this->db->get_where("users",$where);
    if ($query->num_rows()==0){ return false; }
    elseif ($query->num_rows()==1){ return $query->row_array(); }
  }
  
  public function add_user($data){
    $this->db->insert("users",$data);
    $_SESSION['user_id']=$this->db->insert_id();
  }
  
  public function set_user($data,$id){
    $this->db->update("users",$data,$id);
  }
  
}
