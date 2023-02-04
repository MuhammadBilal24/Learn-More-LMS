<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_course extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		if($email ==""){
		$this->load->view('logout_home.php');
		}
	else
			{
				$this->load->view('web_course.php');
			}

	}
}