<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_login extends CI_Controller {

	public function index()
	{
		$this->load->view('backend_login.php');
		
		
	}
	public function check()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=$this->db->query('select * from backend_user where email="'.$email.'" and password ="'.$password.'"');
		if($data->num_rows())
		{
			
			$data=$this->db->query('select * from backend_user where email="'.$email.'" and password ="'.$password.'"')->result()[0];
			$this->session->set_userdata('email', $email);
			// get the email data. if email is users then 
			$this->session->set_userdata('actype', $data->actype);
			echo('Correct');
		}
		else
		{
			$data=$this->db->query('select * from backend_user where email="'.$email.'"');
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
		$this->load->view('backend_login.php');
	}
}
