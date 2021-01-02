<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');

		if($this->session->userdata('login') != 'logedin'){
			redirect(base_url('Login'));
		}
	}
	
	public function create_new_program()
	{
        @$get_course_code = $this->uri->segment(3);
        if(@$get_course_code != ''){
            $sql = "SELECT c.*,ctype.course_type_name, clevel.course_level_name,cbehav.course_behaviour FROM heysushil_courses c JOIN heysushil_course_types ctype ON ctype.course_type_id = c.course_type JOIN heysushil_course_levels clevel ON clevel.course_level_id = c.course_level JOIN heysushil_course_behaviour cbehav ON cbehav.course_id = c.semester_tearm WHERE c.course_code = '$get_course_code'";
            $data['course_data'] = $this->db->query($sql)->result_array();
        }
		// table css file and js file get from page file
        $data['style'] = array('table');
        $data['course_types'] = $this->Model->getAllData('heysushil_course_types');
        $data['course_levels'] = $this->Model->getAllData('heysushil_course_levels');
        $data['heysushil_course_behaviour'] = $this->Model->getAllData('heysushil_course_behaviour');
        // echo '<pre>';print_r($data['course_types']);die;
		$data['page'] = 'front_pages/create_new_program';
		$this->load->view('template/page', $data);
    }
    
    public function get_program_form_data()
    {
        if($this->form_validation->run('get_program_form_data') == FALSE){
			$errors = validation_errors();
			$res['error'] = $errors; 
			echo json_encode($res);
		}else{
            // ----------------IMAGE UPLOAD SECTION WITH HELPER--------------------
            // UPLOAD HELPER FOR STUDENT IMAGE UPLODA
            // print_r($_FILES['image']);
            if(isset($_FILES['image']['name'])){
				$image = $_FILES['image'];
				$fileSubName = 'image';
                $uploadPath = "../assets/uploads/course_banners/";
                $allowedTypes = 'gif|jpg|jpeg|png';
                $course_banner = imageUploadWithWaterMarkHelper($image,$uploadPath,$allowedTypes,$fileSubName);
            }
            // print_r($course_banner);

            $data = array(
                'course_type' => $this->input->post('course_type'),
                'course_level' => $this->input->post('course_level'),
                'course_code' => $this->input->post('course_code'),
                'course_eligibility' => $this->input->post('course_eligibility'),
                'course_duration' => $this->input->post('course_duration'),
                'total_number_of_tearm_or_semester' => $this->input->post('total_number_of_tearm_or_semester'),
                'course_name' => $this->input->post('course_name'),
                'accelerated_mode' => $this->input->post('accelerated_mode'),
                'semester_tearm' => $this->input->post('semester_tearm'),
                'image' => $course_banner['file_name'],
                'career_option' => $this->input->post('career_option'),
            );
            // echo '<pre>';print_r($data);
            $result = $this->Model->insertData('heysushil_courses',$data);
			if($result === true){
                $this->session->set_flashdata('success', 'New course created successfully. Time to add relevent subjects to course.');
                // pass course code to subject page
                $res['redirect'] = 'Programs/course_related_subjects/'.$data['course_code'];
                echo json_encode($res);
            }
        }
    }

    public function course_related_subjects()
    {
        if($this->uri->segment(3) == ''){
            $this->session->set_flashdata('warning', 'Ooops, you\'r trying worng link.');
            redirect('Programs/create_new_program');
        }else{
            // table css file and js file get from page file
            $data['style'] = array('table');
            $course_code = $this->uri->segment(3);
            $data['course_data'] = $this->Model->getLimitedData('heysushil_courses',array('id','course_name','course_code'),array('course_code'=>$course_code),1);
            $data['heysushil_course_behaviour'] = $this->Model->getAllData('heysushil_course_behaviour');
            // echo '<pre>';print_r($course_data);die;
            $data['page'] = 'front_pages/add_subjects';
            $this->load->view('template/page', $data);
        }
    }

    public function get_program_related_subjects_data()
    {
        // if($this->form_validation->run('get_program_related_subjects_data') == FALSE){
		// 	$errors = validation_errors();
		// 	$res['error'] = $errors; 
		// 	echo json_encode($res);
		// }else{
            // echo 'total: '. count($this->input->post('subject_code'));
            
            for($i=0; $i < count($this->input->post('subject_code')); $i++){
                $data = array(
                    'subject_code' => $this->input->post('subject_code')[$i],
                    'subject_name' => $this->input->post('subject_name')[$i],
                    'subject_grade' => $this->input->post('subject_grade')[$i],
                    'subject_semester' => $this->input->post('subject_semester')[$i],
                    'subject_type' => $this->input->post('subject_type')[$i],
                    'course_code' => $this->input->post('course_code'),
                );                
                $result = $this->Model->insertData('heysushil_course_related_subjects',$data);
            }
            
			if($result === true){
                $this->session->set_flashdata('success', 'Subjects added successfully.');
                // pass course code to subject page
                $res['redirect'] = 'Welcome/program_portal/';
                echo json_encode($res);
            }else{
                $this->session->set_flashdata('warning', 'Something worng, Pleas try again or contact developer for solution.');
            }

            // $subject_code = $this->input->post('subject_code');
            // foreach($subject_code as $key => $value){
            //     // echo $value;
            // }
        // }
    }

    public function view_program_detail()
    {
        @$get_course_code = $this->uri->segment(3);
        if(@$get_course_code != ''){
            $sql = "SELECT c.*,ctype.course_type_name, clevel.course_level_name,cbehav.course_behaviour FROM heysushil_courses c JOIN heysushil_course_types ctype ON ctype.course_type_id = c.course_type JOIN heysushil_course_levels clevel ON clevel.course_level_id = c.course_level JOIN heysushil_course_behaviour cbehav ON cbehav.course_id = c.semester_tearm WHERE c.course_code = '$get_course_code'";
            $data['course_data'] = $this->db->query($sql)->result_array();

            $data['total_subjects_no'] = $this->db->query("SELECT s.id FROM heysushil_course_related_subjects s JOIN heysushil_courses c ON c.course_code = s.course_code WHERE c.course_code = '$get_course_code'")->result_array();

            $data['all_subjects'] = $this->db->query("SELECT s.* FROM heysushil_course_related_subjects s JOIN heysushil_courses c ON c.course_code = s.course_code WHERE c.course_code = '$get_course_code'")->result_array();

            $data['style'] = array('table');
            $data['page'] = 'front_pages/view_program_detail';
            $this->load->view('template/page', $data);
            $this->load->view('front_pages/modal/program_related_modal', $data);
        }else{
            $this->session->set_flashdata('warning', 'You are trying to visit course view page without course code. Try again with course code.');
            redirect('Welcome/program_portal/');
        }
    }

    public function get_edit_subject_data()
    {
        $subject_id = $this->input->post('id');
        $course_code = $this->input->post('course_code');

        $data = array(
            'subject_code' => $this->input->post('subject_code'),
            'subject_name' => $this->input->post('subject_name'),
            'subject_grade' => $this->input->post('subject_grade'),
            'subject_semester' => $this->input->post('subject_semester'),
            'subject_type' => $this->input->post('subject_type'),
        );
        // echo '<pre>';print_r($data);die;
        $result = $this->Model->updateData('heysushil_course_related_subjects',$data,array('id'=>$subject_id));
        if($result == true){
            $this->session->set_flashdata('success', 'Successfully updated subject details.');
            redirect('Programs/view_program_detail/'.$course_code.'/');
        }else{
            $this->session->set_flashdata('warning', 'Problem on updating subject details.');
            redirect('Programs/view_program_detail/'.$course_code.'/');
        }
    }

    public function delete_subject()
    {
        $subject_id = $this->input->post('subject_id');
        $course_code = $this->input->post('course_code');
        $result = $this->Model->deleteData('heysushil_course_related_subjects',array('id'=>$subject_id));
        if($result == true){
            $this->session->set_flashdata('danger', 'Successfully deleted subject.');
            // redirect('Programs/view_program_detail/'.$course_code.'/');
            $res['redirect'] = 'Programs/view_program_detail/'.$course_code.'/';
            echo json_encode($res);
        }else{
            $this->session->set_flashdata('warning', 'Problem on deleting subject details.');
            $res['redirect'] = 'Programs/view_program_detail/'.$course_code.'/';
            echo json_encode($res);
        }
    }

}
