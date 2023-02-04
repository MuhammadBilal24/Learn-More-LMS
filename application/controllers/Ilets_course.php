<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ilets_course extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		if($email ==""){
		$this->load->view('logout_home.php');
		}
	else
			{
				$data['ilets_table']=$this->db->get('ilets_course')->result();
				$this->load->view('Ilets_course.php',$data);

			}

	}
}