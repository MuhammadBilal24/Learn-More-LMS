<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bba_dept extends CI_Controller {

	public function index()
	{
		//  these condition uses when we stops command to another account
		$email = $this->session->email;
			if($email ==""){
				$this->load->view('backend_login.php');
		 	}
		else{
		$data['bba_table']= $this->db->get('bba_dept')->result();
		$this->load->view('bba_dept.php',$data);
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
			'subject'=>$this->input->post('subject'),
        	'bookname' => $this->input->post('bookname'),
			'teacher'=>$this->input->post('teacher'),
			'details'=>$this->input->post('details'),
			'files'=>$this->input->post('files'),
			'img' => $data['upload_data']['file_name']
		);
		$result = $this->db->insert('bba_dept', $data1);
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
		$result = $this->db->delete('bba_dept');
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
