<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor extends CI_Controller {



public function index()
	{
		$data['page'] = 'instructor';
		$this->load->view('template/page', $data);
    }

public function get_instructor_form_data()

{
// for taking other value instead of available option in What kind of teaching have you done before
		if( $this->input->post('addLive') == ''){
			$previous_teaching = $this->input->post('addLiveOthers');
		}
		else{
			$previous_teaching = $this->input->post('addLive');
		}
/////////////////////////////////////////////////////////////////////////////////
	
		$data = array(
			'name'=>$this->input->post('name'),
			'phone'=>$this->input->post('phone'),
			'email'=>$this->input->post('email'),
			'prev_teaching'=>$previous_teaching,
			'offered_course'=>$this->input->post('offered_course'),
			'contrib_to_administration'=>$this->input->post('contrib_to_administration'),
			'experienced'=>$this->input->post('experienced'),
			'kind_of_institution'=>$this->input->post('kind_of_institution'),
			'philosophy'=>$this->input->post('philosophy'),
			'professional_goals'=>$this->input->post('professional_goals'),
			'status'=>'0',
			
			);
		// echo "<pre>";
		// print_r($data);
		// exit();
		$result = $this->Model->insertData('heysushil_instructors',$data);
		if($result === true){
					
			return redirect('Instructor/');
					
		}
				
	


}




}
    
    ?>