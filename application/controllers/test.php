<?php
/**
* 
*/
class Test extends CI_Controller
{
	
	public function index(){
		$this->load->view('header');
		$this->load->view('user-settings');
		$this->load->view('footer');
	}
}