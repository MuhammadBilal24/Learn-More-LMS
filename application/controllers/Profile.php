<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		$usertype = $this->session->usertype;
			if($email =='')
			{
				//  no user Contact 
				$this->load->view('profile.php');
			}
			else
			{
				// user admin 
				if($usertype=='Admin')
				{
					$this->load->view('profile.php');
				}
				elseif($usertype=='Student')
				{
					$this->load->view('profile.php');	
				}
				else
				$this->load->view('profile.php');
			}
	}
	
		
}
