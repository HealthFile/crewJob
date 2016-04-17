<?php
/**
* 
*/
class Test extends CI_Controller
{
	
	public function index(){
		$this->load->view('header');
		$this->load->view('create-project');
		$this->load->view('footer');
	}
}