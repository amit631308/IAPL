<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	public function index()
	{
		if($this->session->userdata('login') == 'logedin'){
			redirect(base_url('Welcome'));
		}else{
			$email = $this->input->post('email');
			$password = $this->input->post('password'); 
			
			$this->form_validation->set_rules('email', 'Your Email ID', 'required|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('password', 'Your Password', 'required');

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_message('required', 'Enter %s');

			$data = $this->Model->getSingleData('heysushil_admin',array('email'=>$email,'password'=>$password));

			if($this->form_validation->run() == FALSE){
				$this->load->view('login');
			}else{
				// echo $email . $password;
				
				if($data){
					// Get type from user_type table
					$type = $data[0]['type'];
					$user_type = $this->db->query("SELECT a.name,ut.type FROM heysushil_user_types ut JOIN heysushil_admin a ON a.type = ut.ut_number WHERE a.type = '$type'")->result_array();
					// die;
					// print_r($user_type);die;
					$sessionData = array(
						'type' => $user_type[0]['type'],
						'name' => $user_type[0]['name'],
						'login' => 'logedin',
					);
					$this->session->set_userdata($sessionData);
					redirect(base_url('Welcome'));
				}else{
					$this->load->view('login');
				}
			}
		}
	}

	public function validateUser($email,$recordCount){
	  if ($recordCount != 0){
	   return TRUE;
	  }else{
	   $this->form_validation->set_message('validateUser', 'Invalid %s or Password');
	   return FALSE;
	  }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}