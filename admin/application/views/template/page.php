<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
	// print_r($style);die;
	$data = array();

	// If get other required css then use this condtions to add those required css on header section
	if(@$style[0] == 'home_page'){
		@$data['css'] = array(
			"plugins/fontawesome-free/css/all.min.css",
			"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
			"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
			"plugins/icheck-bootstrap/icheck-bootstrap.min.css",
			"plugins/jqvmap/jqvmap.min.css",
			"dist/css/adminlte.min.css",
			"plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
			"plugins/daterangepicker/daterangepicker.css",
			"plugins/summernote/summernote-bs4.css",
			"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700",
		);
		@$data['js'] = array(
			"plugins/jquery/jquery.min.js",
			"plugins/jquery-ui/jquery-ui.min.js",
			"plugins/bootstrap/js/bootstrap.bundle.min.js",
			"plugins/chart.js/Chart.min.js",
			"plugins/sparklines/sparkline.js",
			"plugins/jqvmap/jquery.vmap.min.js",
			"plugins/jqvmap/maps/jquery.vmap.usa.js",
			"plugins/jquery-knob/jquery.knob.min.js",
			"plugins/moment/moment.min.js",
			"plugins/daterangepicker/daterangepicker.js",
			"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
			"plugins/summernote/summernote-bs4.min.js",
			"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
			"dist/js/adminlte.js",
			"dist/js/pages/dashboard.js",
			"dist/js/demo.js",
		);
	}
	// echo '<pre>';print_r($data);die;
	// Table and form related css and js
	if(@$style[0] == 'table'){
		@$data['css'] = array(
			"plugins/fontawesome-free/css/all.min.css",
			"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
			"plugins/daterangepicker/daterangepicker.css",

			"plugins/icheck-bootstrap/icheck-bootstrap.min.css",
			"plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css",
			"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
			"plugins/select2/css/select2.min.css",
			"plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css",
			"plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css",

			"plugins/datatables-bs4/css/dataTables.bootstrap4.min.css",
			"plugins/datatables-responsive/css/responsive.bootstrap4.min.css",
			"dist/css/adminlte.min.css",
			"plugins/summernote/summernote-bs4.css",
			"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700",
		);
		@$data['js'] = array(
			"plugins/jquery/jquery.min.js",
			"plugins/bootstrap/js/bootstrap.bundle.min.js",
			"plugins/daterangepicker/daterangepicker.js",

			"plugins/select2/js/select2.full.min.js",
			"plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js",
			"plugins/moment/moment.min.js",
			"plugins/inputmask/min/jquery.inputmask.bundle.min.js",
			"plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js",
			"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
			"plugins/bootstrap-switch/js/bootstrap-switch.min.js",
			"plugins/bs-custom-file-input/bs-custom-file-input.min.js",

			"plugins/datatables/jquery.dataTables.min.js",
			"plugins/datatables-bs4/js/dataTables.bootstrap4.min.js",
			"plugins/datatables-responsive/js/dataTables.responsive.min.js",
			"plugins/datatables-responsive/js/responsive.bootstrap4.min.js",
			"dist/js/adminlte.min.js",
			"dist/js/demo.js",
			"plugins/summernote/summernote-bs4.min.js",
		);
	}

	// echo '<pre>';print_r($data);die;
	
	$this->load->view('template/header', $data);
	$this->load->view($page);
	$this->load->view('template/footer', $data);

?>