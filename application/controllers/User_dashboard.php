<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {
	public function index()
	{
		
		
		$email = $this->session->email;
		$department = $this->session->department;
		$data['bcs_table']=$this->db->get('bcs_dept')->result();
		$data['bba_table']=$this->db->get('bba_dept')->result();
		if($email ==""){
		$this->load->view('logout_home.php');
		}
	else
			{
				
				 
				if($department=='Computer Science')
				{
					
					$this->load->view('user_dashboard.php',$data);
				}
				elseif($department=='Business Administration')
				{
					$this->load->view('user_dashboard.php',$data);	
				}
				elseif($department=='Teacher')
				{
					$this->load->view('user_dashboard.php',$data);	
				}
				else
				
					$this->load->view('user_dashboard.php');
			}

	}
}