<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->helper('string');
	}

	
	public function index()
	{
		$data['page'] = 'index';
		$this->load->view('template/page', $data);
	}
	
	public function career()
	{
		// get career data to show on page
		$data['career_result'] = $this->db->query("SELECT *, (SELECT COUNT(job_opening_type) FROM heysushil_career WHERE job_opening_type = 'Fresher' AND active_deactivated = 0) as fresher_count, (SELECT COUNT(job_opening_type) FROM heysushil_career WHERE job_opening_type = 'Experienced' AND active_deactivated = 0) as experience_count FROM heysushil_career WHERE active_deactivated = 0")->result_array();
		// echo "<pre>";print_r($data['career_result']);die;
		$data['page'] = 'career';
		$this->load->view('template/page', $data);
	}

	public function career_details()
	{
		$getCareerId = substr($this->uri->segment(2), 40);
		$data['single_career'] = $this->Model->getSingleData('heysushil_career',array('id'=>$getCareerId));
		// echo '<pre>'; print_r($data['single_career']);die;
		$data['page'] = 'career-details';
		$this->load->view('template/page', $data);
	}

	public function career_apply_mail(){
		// upload image if available
		if(isset($_FILES['resume']['name'])){
			$document = $_FILES['resume'];
			$documentName = 'resume';
			$uploadPath = "assets/uploads/resumes/";
			$allowedTypes = 'txt|pdf|ppt|pptx|doc|docx';
			$resume = documentUploadHelper($document, $uploadPath, $allowedTypes, $documentName);
		}
		// echo '<pre>';print_r($resume);die;

		$form = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'positionapplied' => $this->input->post('positionapplied'),
			'resume_name' => @$resume['orig_name'] ? $resume['orig_name'] : '',
			'resume_name_enc' => @$resume['file_name'] ? $resume['file_name'] : '',
			'type' => 'career',
			'form_name' => 'course apply now',
		);
		// echo '<pre>';print_r($form);

		// Form data is an array which have multipal type of datas.
        @$name = $form['name'] ? $form['name'] : 'No entry';
        @$email = $form['email'] ? $form['email'] : 'No entry';
        @$phone = $form['phone'] ? $form['phone'] : 'No entry';
        @$address = $form['address'] ? $form['address'] : 'No entry';
        @$positionapplied = $form['positionapplied'] ? $form['positionapplied'] : 'No entry';
        @$resume_name = $form['resume_name'] ? $form['resume_name'] : 'No entry';
        @$resume_name_enc = $form['resume_name_enc'] ? $form['resume_name_enc'] : 'No entry';
        @$type = $form['type'] ? $form['type'] : 'No entry';
		@$form_name = $form['form_name'] ? $form['form_name'] : 'No entry';
		
		$subject = "New career enquiry from career page";

		$message = $subject . " all details\r\n\n";
		$message.="Name              	: ".$name."\r\n";
		$message.="Email             	: ".$email."\r\n";
		$message.="Mobile             	: ".$phone."\r\n";
		$message.="Address   		 	: ".$address."\r\n";
		$message.="Position Applied for : ".$positionapplied."\r\n";
		$message.="Resume Name		    : ".$resume_name."\r\n";
		$message.="Contact ASAP";
		// echo $message;die;

		$doc_file = base_url().'assets/uploads/resumes/'.$resume_name_enc;

		// ---------send to admin----------------------------
		$career_email = 'career@iaplinstitute.com';
		$reply_to = 'career@iaplinstitute.com';

		if(@$career_email){
			// This helpr use to send email by getting these 4 arguments only need to change main email and password in case use on other project
			send_admin_mail_with_attachment($career_email, $reply_to, $subject, $message, $doc_file);
		}
		
		// ---------send to user----------------------------
		$email_info = array(
			'type' => $form['type'],
			'name' => $name,
		);
		// THis helpr use to get particular subject and message body for email. This helper store all data in array form in case have multipal email forms but you want to use them form one place.
		$s_data = email_reply_messages($email_info);
		// echo '<pre>';print_r(email_reply_messages($email_info));die;

		if(@$email){
			// This helpr use to send response message to user. Only you need to change email and password if you use this on other project.
			send_user_mail($email, $reply_to, $s_data['subject'], $s_data['message']);
			$this->session->set_flashdata('success','Email sended successfully.');
		}else{
			$this->session->set_flashdata('success','Email not sended. Something wrong. Try again.');
		}
		
		redirect(base_url().'career');
	}

	public function enquiry_form(){
		if($this->form_validation->run('enquiry_form') == FALSE){
			$errors = validation_errors();
			$res['error'] = $errors; 
			echo json_encode($res);
			// echo json_encode(['error'=>$errors]);
		}else{
			$form = array(
				'name' => $this->input->post('reg_name'),
				'email' => $this->input->post('reg_email'),
				'phone' => $this->input->post('reg_phone'),
				'study_level' => $this->input->post('study_level'),
				'massage' => $this->input->post('massage'),
				'type' => 'enquiry',
				'form_name' => 'popup enquiry form',
			);
			// echo '<pre>';print_r($form);die;
			$final_data = array(
				'Name' => $form['name'] ? $form['name'] : 'No entry',
				'Email' => $form['email'] ? $form['email'] : 'No entry',
				'Phone' => $form['phone'] ? $form['phone'] : 'No entry',
				'Study Level' => $form['study_level'] ? $form['study_level'] : 'No entry',
				'Massage' => $form['massage'] ? $form['massage'] : 'No entry',
				'Type' => $form['type'] ? $form['type'] : 'No entry',
				'Form Name' => $form['form_name'] ? $form['form_name'] : 'No entry',
			);

			$career_email = 'info@iaplinstitute.com';
			$reply_to = 'info@iaplinstitute.com';
			$subject = "New career enquiry from career page";

			// ---------send to admin----------------------------
			// $career_email = 'sushil.chaudhary111@gmail.com';
			if(@$career_email){
				// This helpr use to send email by getting these 4 arguments only need to change main email and password in case use on other project
				send_user_info_to_admin($final_data, $reply_to, $career_email, $subject);
			}
			
			// ---------send to user----------------------------
			$email_info = array(
				'type' => $form['type'],
				'name' => $form['name'],
			);
			// THis helpr use to get particular subject and message body for email. This helper store all data in array form in case have multipal email forms but you want to use them form one place.
			$s_data = email_reply_messages($email_info);
			// echo '<pre>';print_r(email_reply_messages($email_info));die;

			if(@$form['email']){
				// This helpr use to send response message to user. Only you need to change email and password if you use this on other project.
				send_user_mail($form['email'], $reply_to, $s_data['subject'], $s_data['message']);
				$this->session->set_flashdata('success','Email sended successfully.');
			}else{
				$this->session->set_flashdata('error','Email not sended. Something wrong. Try again.');
			}
			
			// redirect(base_url().'career');
			$res['redirect'] = 'career'; 
			echo json_encode($res);
		}
	}

	// create tables as par requirments
	public function db(){
		// insert data into table
		$sql = "CREATE TABLE IF NOT EXISTS heysushil_email_data(
			id int(10) not null auto_increment primary key,
			type varchar(100) null,
			form_name varchar(200) null,
			name varchar(100) null,
			email varchar(100) null,
			phone varchar(100) null,
			address varchar(1000) null,
			positionapplied varchar(100) null,
			resume varchar(1000) null
		)";
		$this->db->query($sql);
	}
}
