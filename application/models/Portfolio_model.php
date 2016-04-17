<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Portfolio_model extends CI_Model{
  
  public function get_links($where){
    $query=$this->db->get_where("links",$where);
    if ($query->num_rows()==0){ return false; }
    else{ 
      foreach ($query->result_array() as $link){
        $links[$link['link_id']]=array('link_note'=>$link['link_note'],'link'=>$link['link']);
      }
      return $links;
    }
  }
  
  public function add_link($data){
    $this->db->insert("links",$data);
    return $this->db->insert_id();
  }
  
  public function delete_link($data){
    $this->db->delete("links",$data);
  }
  
  public function get_files($where){
    $query=$this->db->get_where("files",$where);
    if ($query->num_rows()==0){ return false; }
    else{ 
      foreach ($query->result_array() as $file){
        $files[$file['id']]=$file['org_filename'];
      }
      return $files;
    }
  }
  
  public function delete_file($data){
    $query=$this->db->get_where("files",$data);
    if ($query->num_rows()==1){
      $file=$query->row_array();
      unlink('assets/uploads/'.$file['filename']);
      $this->db->delete("files",$data);
      return true;
    }
    else{ return false; }
  }
  
}
