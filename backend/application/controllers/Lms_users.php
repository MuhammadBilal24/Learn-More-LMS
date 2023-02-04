<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lms_users extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('backend_login.php');
		}else{
		$data['lms_users']= $this->db->get('lms_user')->result();
		$this->load->view('lms_users.php',$data);
	}
}
}
