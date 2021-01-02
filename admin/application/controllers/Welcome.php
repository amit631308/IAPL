<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.    
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');

		if($this->session->userdata('login') != 'logedin'){
			redirect(base_url('Login'));
		}
	}
	
	public function index()
	{
		$data['style'] = array('home_page');
		$data['page'] = 'index';
		$this->load->view('template/page', $data);
	}

	public function career_portal()
	{
		// table css file
		$data['style'] = array('table');
		$data['page'] = 'front_pages/career_portal';
		$this->load->view('template/page', $data);
	}

	public function program_portal()
	{
		// Get course or program data
		$sql = "SELECT c.*,ctype.course_type_name, clevel.course_level_name,cbehav.course_behaviour FROM heysushil_courses c JOIN heysushil_course_types ctype ON ctype.course_type_id = c.course_type JOIN heysushil_course_levels clevel ON clevel.course_level_id = c.course_level JOIN heysushil_course_behaviour cbehav ON cbehav.course_id = c.semester_tearm";
		$data['course_data'] = $this->db->query($sql)->result_array();
		// print_r($data);die;
		$data['style'] = array('table');
		$data['page'] = 'front_pages/program_portal';
		$this->load->view('template/page', $data);
	}
	public function advisor()
	{
		$this->load->view('advisers');
	}

}
