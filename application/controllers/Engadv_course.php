<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Engadv_course extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		if($email ==""){
		$this->load->view('logout_home.php');
		}
	else
			{
				$this->load->view('engadv_course.php');
			}

	}
}