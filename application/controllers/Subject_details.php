<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_details extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		$department = $this->session->department;
		$data['bcs_table']=$this->db->get('bcs_dept')->result();
		$data['bba_table']=$this->db->get('bba_dept')->result();
		if($email ==""){
		$this->load->view('subject_details.php');
		}
	else
			{
				 
				if($department=='Computer Science')
				{
					$this->load->view('subject_details.php',$data);
				}
				elseif($department=='Business Administration')
				{
					$this->load->view('subject_details.php',$data);	
				}
				elseif($department=='Teacher')
				{
					$this->load->view('subject_details.php',$data);	
				}
				else
					$this->load->view('subject_details.php',$data);
			}

	}
	

}
