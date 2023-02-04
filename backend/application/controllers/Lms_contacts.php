<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lms_contacts extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('backend_login.php');
		}else{
		$data['lmscontacts']= $this->db->get('lms_contact')->result();
		$this->load->view('lms_contacts.php',$data);
	}
}
}
