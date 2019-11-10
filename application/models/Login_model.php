<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
							->where('password', md5($password))
							->get('tbl_admin');

		if($query->num_rows() > 0){
			$data = array(
				'username' => $username,
				'logged_in' => TRUE)
				);

		$this->session->userdata($data);

		return TRUE;
		}else{
			return FALSE;
		}
	}
}