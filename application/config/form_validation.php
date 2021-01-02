<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
			'enquiry_form' => array(
				array(
					'field' => 'reg_name',
					'label' => 'Name',
					'rules' => 'required',
				),
				array(
					'field' => 'reg_email',
					'label' => 'Email',
					'rules' => 'required',
				),
				array(
					'field' => 'reg_phone',
					'label' => 'Phone',
					'rules' => 'required',
				),
				array(
					'field' => 'study_level',
					'label' => 'Study Level',
					'rules' => 'required',
				),
			),
			'admissionFormValidation' => array(
				array(
					'field' => 'admissionNo',
					'label' => 'Admission Number',
					'rules' => 'required|min_length[6]|max_length[18]|numeric|is_unique[students.admissionNo]',
					'errors' => array(
						'is_unique' => 'This %s is already exists.'
					)
				),
				array(
					'field' => 'rollNo',
					'label' => 'Roll Number',
					'rules' => 'required|max_length[16]|is_unique[students.rollNo]',
					'errors' => array(
						'is_unique' => 'This %s is already alloted to student. Try another number.'
					)
				),
				array(
					'field' => 'studentName',
					'label' => 'Student Name',
					'rules' => 'trim|required|xss_clean|regex_match[/^[][a-zA-Z0-9@# ,().]+$/]'
				),
				array(
					'field' => 'gender',
					'label' => 'Gender',
					'rules' => 'required'
				),
				array(
					'field' => 'dob',
					'label' => 'Date of Birth (DOB)',
					'rules' => 'required'
				),
				array(
					'field' => 'className',
					'label' => 'Class',
					'rules' => 'required'
				),
				array(
					'field' => 'adhaarNo',
					'label' => 'Aadhaar Number',
					'rules' => 'min_length[12]|max_length[18]|numeric|is_unique[students.adhaarNo]',
					'errors' => array(
						'is_unique' => 'This %s is already exists.'
					)
				)
			),
		);