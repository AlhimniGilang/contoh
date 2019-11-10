<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

	}

	public function __index()
	{
		$this->load->view('login_view');
	}

	public function dologin(){
		if($this->input-> post('submit')){
			$this->form_validation->set_rules('username', 'username', 'trim|requierd');
			$this->form_validation->set_rules('password', 'password', 'trim|requierd');

			if($this->form_validation->run()){
				if($this->Login_model->login() == TRUE){
					redirect('Admin/');
				}else{
					$data['notif'] = 'Gagal';
					$this->load->view('Login_view', $data);
				}
			}else{
				$data['notif'] = validation_errors();
				$this->load->view('Login_view', $data);
			}
		}
	}
}