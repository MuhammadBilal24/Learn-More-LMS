<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		if($email ==""){
		$this->load->view('logout_home.php');
		}
		else
		{
			// in this home is login page
		$this->load->view('home.php');
		}
	}
	
	
}
