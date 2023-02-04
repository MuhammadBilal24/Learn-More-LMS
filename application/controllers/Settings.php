<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function index()
	{
		$email = $this->session->email;
		$usertype = $this->session->usertype;
			if($email =='')
			{
				//  no user Contact 
				$this->load->view('settings.php');
			}
			else
			{
				// user admin 
				if($usertype=='Admin')
				{
					$this->load->view('settings.php');
				}
				elseif($usertype=='Student')
				{
					$this->load->view('settings.php');	
				}
				else
				$this->load->view('settings.php');
			}
	}
	public function edit()
	{
		$id = $this->session->id;
		$data=$this->db->query("select * from lms_user where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function editpassword()
	{
		$id = $this->session->id;
		$data=$this->db->query("select * from lms_user where id='$id'")->result()[0];		
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$birth = $this->input->post('birth');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$city = $this->input->post('city');
		$pcode = $this->input->post('pcode');
		$phone = $this->input->post('phone');
		$description = $this->input->post('description');
		$province = $this->input->post('province');
		$batch = $this->input->post('batch');
		$university = $this->input->post('university');
		$department = $this->input->post('department');
		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'email' => $email,
			'birth' => $birth,
			'month' => $month,
			'year' => $year,
			'city' => $city,
			'pcode' => $pcode,
			'phone' => $phone,
			'description' => $description,
			'province' => $province,
			'batch' => $batch,
			'university' => $university,
			'department' => $department,
		];
		$this->db->where('id',$id);
		$this->db->update('lms_user',$data);
		echo("Correct");
	}
		public function updatepassword()
	{
		$id = $this->input->post('id');
		
		$password = $this->input->post('password');
		$data = [
			'password' => $password,
			
		];
		$this->db->where('id',$id);
		$this->db->update('lms_user',$data);
		echo("Correct");
	}
	// public function edit2()
	// {
	// 	$id = $this->input->post('id');
	// 	$data=$this->db->query("select * from customize_table where id='$id'")->result()[0];		
	// 	echo json_encode($data);
	// }
	// public function update2()
	// {
	// 	$id = $this->input->post('id');
	// 	// $web_fname = $this->input->post('web_fname');
	// 	// $address = $this->input->post('address');
	// 	// $email = $this->input->post('email');
	// 	// $link = $this->input->post('link');
	// 	// $number = $this->input->post('number');
	// 	$ph11 = $this->input->post('ph11');
	// 	$data = [
	// 		// 'web_fname' => $web_fname,
	// 		// 'address' => $address,
	// 		// 'email' => $email,
	// 		// 'link' => $link,
	// 		// 'number' => $number,
	// 		'ph11' => $ph11,
	// 	];
	// 	$this->db->where('id',$id);
	// 	$this->db->update('customize_table',$data);
	// 	echo("Correct");
	// }
	// public function delete()
	// {
	// 	$id = $this->input->post('id');

	// 	$this->db->where('id', $id);
	// 	$result = $this->db->delete('customize_table');
	// 	if ($result) {
	// 		echo ("Correct");
	// 	} else {
	// 		echo ("Uncorrect");
	// 	}
	// }

	
}

