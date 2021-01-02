<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css file -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main-style.css">
  <!-- Title -->
  <title>Education </title>
  <!-- Favicon -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link href="<?= base_url(); ?>assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
  <link href="<?= base_url(); ?>assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>


<body>
  <!-- <div id="preloader">
    <div id="status">&nbsp;</div>
  </div> -->

  <div class="ttm-topbar-wrapper clearfix">
    <div class="container">
      <div class="ttm-topbar-content">

        <div class="topbar-right text-right">
          <div class="ttm-social-links-wrapper list-inline">
            <ul class="top-section-menu">
              <li><a href="star_student.php" class="tooltip-bottom">Star Students</a></li>
              <li><a href="advisors.php" class=" tooltip-bottom">Advisers</a></li>
              <li><a href="Alumni.php" class=" tooltip-bottom">Alumni</a></li>
              <li><a href="faq.php" class="">Faq</a></li>
            </ul>
          </div>
          <div class="header-btn">
            <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="helping_hand.php"> Helping Hands </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <header>
    <nav id="navbar-s" class="navbar navbar-expand-md ">
      <a class="navbar-brand logo-top" href="<?=base_url();?>" id="logo"><img src="<?= base_url(); ?>assets/images/iapl/logo.png" width="120"></a>


      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="programme.php">Programmes
            <!-- <i class="fa fa-angle-down "style="font-size: 17px;font-weight: bold;"></i> --> </a>
          <div class="sub-menu">
            <a class="menu-item" href="course.php">Engineering</a>
            <a class="menu-item" href="management_course.php">Management</a>
            <a class="menu-item" href="short_term.php">Short Term</a>
          </div>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="admission_process.php">Admission Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student_word.php">Student words</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="short_term.php">Extra Mile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#myModal">
            <img src="<?= base_url(); ?>assets/images/search.png" width="25"></a>
        </li>

      </ul>

    </nav>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Course search:</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form class="mob-course-search" method="get">
              <ul>

                <li>
                  <select class="form-control" name="study_level">
                    <option value="select-option">Subject of Interest</option>
                    <option value="engineering">Engineering</option>
                    <option value="management">Management</option>
                    <option value="shorttermcourse">Short Term Course</option>
                  </select>
                </li>
                <li>

                  <select class="form-control" name="Subject_of_Interest">
                    <option value="select-option">Course Length</option>
                    <option value="primarylevel">Primary Level</option>
                    <option value="threemonth">3 Month</option>
                    <option value="sixmonth">6 Month</option>
                    <option value="oneyear">1 Year</option>
                    <option value="twoyear">2 Years</option>
                    <option value="threeyeart">3 Years</option>
                    <option value="otherlevel">Other Level</option>
                  </select>

                </li>
                <li>


                  <select class="form-control" name="course_length" placeholder="select">
                    <option value="select-option">Course Length</option>
                    <option value="primarylevel">Primary Level</option>
                    <option value="threemonth">3 Month</option>
                    <option value="sixmonth">6 Month</option>
                    <option value="oneyear">1 Year</option>
                    <option value="twoyear">2 Years</option>
                    <option value="threeyeart">3 Years</option>
                    <option value="otherlevel">Other Level</option>
                  </select>

                </li>
              </ul>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">GO</button>
          </div>

        </div>
      </div>
    </div>
    <!-- MOB MENU -->
    <div id="mySidenav" class="sidenav">
      <a href="<?=base_url();?>" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?=base_url();?>"><img src="<?= base_url(); ?>assets/images/iapl/logo.png" width="120"></a>
      <a href="about.php">About Us</a>

      <button class="dropdown-btn">Programmes
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="course.php">Engineering</a>
        <a href="management_course.php">Management</a>
        <a href="short_term.php">Short Term</a>

      </div>
      <a href="admission_process.php">Admission Process</a>
      <a href="student_word.php">Student words</a>
      <a href="#">Blogs</a>
      <a href="short_term.php">Extra Mile</a>
      <a href="contact.php">Contact Us</a>


    </div>

    <div id="main">
      <span class="mob-menu" style="font-size:30px;cursor:pointer;float: right;margin-right:  25px;" onclick="openNav()">&#9776;
        <span class="mob-logo"><img src="<?= base_url(); ?>assets/images/iapl/logo.png" width="70"></span></span>
      <button class="navbar-toggler search-icon" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <img src="<?= base_url(); ?>assets/images/search.png">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="card-body form-mob-body">
          <div class="mob-search-box">
            <div class="row">
              <div class="col-md-12 mob-form-row-section">
                <form class="mob-course-search" method="get">
                  <ul>
                    <li>Course search:</li>
                    <li>
                      <select class=" form-control " name="study_level">
                        <option value="select-option">Subject of Interest</option>
                        <option value="engineering">Engineering</option>
                        <option value="management">Management</option>
                        <option value="shorttermcourse">Short Term Course</option>
                      </select>
                    </li>
                    <li>

                      <select class="form-control" name="Subject_of_Interest">
                        <option value="select-option">Course Length</option>
                        <option value="primarylevel">Primary Level</option>
                        <option value="threemonth">3 Month</option>
                        <option value="sixmonth">6 Month</option>
                        <option value="oneyear">1 Year</option>
                        <option value="twoyear">2 Years</option>
                        <option value="threeyeart">3 Years</option>
                        <option value="otherlevel">Other Level</option>
                      </select>

                    </li>
                    <li>
                      <select id="course_length" class="course_length form-control ulockd-bgthm" name="course_length" placeholder="select">
                        <option value="select-option">Course Length</option>
                        <option value="primarylevel">Primary Level</option>
                        <option value="threemonth">3 Month</option>
                        <option value="sixmonth">6 Month</option>
                        <option value="oneyear">1 Year</option>
                        <option value="twoyear">2 Years</option>
                        <option value="threeyeart">3 Years</option>
                        <option value="otherlevel">Other Level</option>
                      </select>

                      <button type="btn" class="mob-select_button">Go</button>

                    </li>
                  </ul>
                </form>
              </div>
              <div class=" col-md-12 search-row mob-course-search-box2">
                <div class="form-group mob-search-box-2">
                  <input placeholder="Site Search" class="form-control " type="text" id="edit-keys" name="keys" value="" size="20" maxlength="255">
                </div>
              </div>
              <div class="col-md-1 go-btn mob-course-search-box2">
                <button type="btn" class="mob-select_button-2">Go</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </header>