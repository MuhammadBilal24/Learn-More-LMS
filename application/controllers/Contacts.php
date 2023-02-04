<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		$usertype = $this->session->usertype;
			if($email =='')
			{
				//  no user Contact 
				$this->load->view('contacts.php');
			}
			else
			{
				// user admin 
				if($usertype=='Admin')
				{
					$this->load->view('contacts.php');
				}
				elseif($usertype=='Student')
				{
					$this->load->view('contacts.php');	
				}
				elseif($usertype=='Teacher')
				{
					$this->load->view('contacts.php');	
				}
				else
				$this->load->view('contacts.php');
			}
	}
	// signup form ( from contact page you can sinup new account)
	public function signup()
	{
		$fname = $this->input->post('fname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');
		$department = $this->input->post('department');
		$batch = $this->input->post('batch');
		$university = $this->input->post('university');
		$data = [
			'fname' => $fname,
			'email' => $email,
			'password' => $password,
			'usertype' => $usertype,
			'department' => $department,
			'batch' => $batch,
			'university' => $university,
		];
		$result = $this->db->insert('lms_user', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
		
}
