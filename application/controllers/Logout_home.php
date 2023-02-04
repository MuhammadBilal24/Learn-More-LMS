<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_home extends CI_Controller {
	public function index()
	{
		$this->load->view('logout_home.php');
	}
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
	public function check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=$this->db->query('select * from lms_user where email="'.$email.'" and password ="'.$password.'"');
		if($data->num_rows())
		{
			
			$data=$this->db->query('select * from lms_user where email="'.$email.'" and password ="'.$password.'"')->result()[0];
			$this->session->set_userdata('email', $email);
			// get the email data. if email is users then 
			$this->session->set_userdata('usertype', $data->usertype);
			$this->session->set_userdata('fname', $data->fname);
			$this->session->set_userdata('lname', $data->lname);
			$this->session->set_userdata('batch', $data->batch);
			$this->session->set_userdata('department', $data->department);
			$this->session->set_userdata('university', $data->university);
			$this->session->set_userdata('birth', $data->birth);
			$this->session->set_userdata('month', $data->month);
			$this->session->set_userdata('year', $data->year);
			$this->session->set_userdata('city', $data->city);
			$this->session->set_userdata('pcode', $data->pcode);
			$this->session->set_userdata('province', $data->province);
			$this->session->set_userdata('phone', $data->phone);
			$this->session->set_userdata('description', $data->description);
			$this->session->set_userdata('id', $data->id);
			echo('Correct');
		}
		else
		{
			$data=$this->db->query('select * from lms_user where email="'.$email.'"');
			if($data->num_rows())
			{
				echo('Email');				
			}
			else
			{
				echo('Wrong');
			}	
		}
		// if($data->email==$email || $data->password==$password)
		// {
		// 	echo("Correct");
		// }
		
		// else{
		// 	echo ("Uncorrect");
		// }
	}
	function logout(){
		session_destroy();
		redirect();
	}
	
}
