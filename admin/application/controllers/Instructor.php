<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');

		if($this->session->userdata('login') != 'logedin'){
			redirect(base_url('Login'));
		}
    }
 
	public function index()
	{
		
		$data['instructors'] = $this->Model->getAllData("heysushil_instructors");
		// echo "<pre>";
		// print_r($data);
		// exit();
		$data['style'] = array('table');
		$data['page'] = 'front_pages/instructor_portal';
		$this->load->view('template/page', $data);
		$this->load->view('front_pages/modal/program_related_modal', $data);
    }

	public function edit_instructor()
	{	

		$id=$this->input->post('id');

		$data = array(
			'name'=>$this->input->post('name'),
			'phone'=>$this->input->post('phone'),
			'email'=>$this->input->post('email'),
			'prev_teaching'=>$this->input->post('prev_teaching'),
			'offered_course'=>$this->input->post('offered_course'),
			'contrib_to_administration'=>$this->input->post('contrib_to_administration'),
			'experienced'=>$this->input->post('experienced'),
			'kind_of_institution'=>$this->input->post('kind_of_institution'),
			'philosophy'=>$this->input->post('philosophy'),
			'professional_goals'=>$this->input->post('professional_goals'),
			'status'=>$this->input->post('status'),
			
			);
			// echo "<pre>";
			// print_r($data);
			// echo $id;
			// exit();
			$result = $this->Model->updateData('heysushil_instructors',$data,array('id'=>$id));		
			if($result === true){
					
			return redirect('Instructor/');
					
		}
	}

	public function delete_instructor()
	{
		
		$id=$this->uri->segment(3);
		$result = $this->Model->deleteData('heysushil_instructors',array('id'=>$id));		
			if($result === true){
					
			return redirect('Instructor/');
					
		}


	}
	
	



}


    ?>