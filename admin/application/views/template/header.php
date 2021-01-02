<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css"> -->
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/summernote/summernote-bs4.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  
  <!-- Other related css -->
  <?php 
    if(@$css){
      // print_r($css);die;
      foreach ($css as $link) {
        echo '<link rel="stylesheet" href="'. base_url() . @$link . '">';
      }      
    }
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">      
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Login/logout" role="button">
          Logout
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url();?>" class="brand-link">
      <img src="<?php echo base_url(); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Hi, Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url();?>Welcome/program_portal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>Welcome/career_portal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Career Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url();?>instructor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Instructor Section</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
