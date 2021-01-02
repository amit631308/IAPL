<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
			'get_program_form_data' => array(
                array(
					'field' => 'course_code',
					'label' => 'course code',
					'rules' => 'required|is_unique[heysushil_courses.course_code]',
					'errors' => array(
						'is_unique' => 'This %s is already exists.'
					)
				),				
                array(
					'field' => 'course_eligibility',
					'label' => 'course eligibility',
					'rules' => 'required',
				),				
                array(
					'field' => 'course_duration',
					'label' => 'course duration',
					'rules' => 'required',
				),				
                array(
					'field' => 'total_number_of_tearm_or_semester',
					'label' => 'total number of tearm or semester',
					'rules' => 'required',
				),				
                array(
					'field' => 'course_name',
					'label' => 'course name',
					'rules' => 'required',
				),				
                array(
					'field' => 'accelerated_mode',
					'label' => 'accelerated mode',
					'rules' => 'required',
				),				
                array(
					'field' => 'semester_tearm',
					'label' => 'semester/tearm',
					'rules' => 'required',
				),			
                array(
					'field' => 'career_option',
					'label' => 'career option',
					'rules' => 'required',
				),					
			),
			'get_program_related_subjects_data' => array(
				// array(
				// 	'field' => 'subject_code',
				// 	'label' => 'Current Session',
				// 	'rules' => 'required'
				// ),
			)
		);