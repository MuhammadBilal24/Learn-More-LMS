<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_users extends CI_Controller {

	public function index()
	{
		//  these condition uses when we stops command to another account
		$email = $this->session->email;
			if($email ==""){
				$this->load->view('backend_login.php');
		 	}
		else{
		$data['bck_user']= $this->db->get('backend_user')->result();
		$this->load->view('backend_users.php',$data);
		}
	}
	public function insert()
	{
		$config['upload_path']="./assets/product";
        $config['allowed_types']='gif|jpg|png|jpeg|PNG';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
        $data = array('upload_data' => $this->upload->data());
        $data1 = array(
			'name'=>$this->input->post('name'),
        	'email' => $this->input->post('email'),
			'password'=>$this->input->post('password'),
			'actype'=>$this->input->post('actype'),
			'img' => $data['upload_data']['file_name']
		);
		$result = $this->db->insert('backend_user', $data1);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	}
	// Insert Ends

	// Delete Starts
	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$result = $this->db->delete('backend_user');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	function logout(){
		session_destroy();
		$this->load->view('backend_login.php');
	}
}
