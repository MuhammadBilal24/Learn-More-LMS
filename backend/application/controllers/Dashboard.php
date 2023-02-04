<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('backend_login.php');
		}else{
		$this->load->view('dashboard.php');
	}
}
}
