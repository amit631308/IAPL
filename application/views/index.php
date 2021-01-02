<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <!-- Title -->
  <title>Education </title>
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
  
  <script src="<?= base_url(); ?>assets/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
</head>

<body>
  <!-- <div id="preloader">
    <div id="status">&nbsp;</div>
  </div> -->
  <div class="wrapper">
    <div class="ttm-topbar-wrapper clearfix">
      <div class="container">
        <div class="ttm-topbar-content">
          <div class="topbar-right text-right">
            <div class="ttm-social-links-wrapper list-inline">
              <ul class="top-section-menu">
                <li><a href="star_student.php" class="tooltip-bottom">Star Students</a></li>
                <li><a href="advisers.php" class=" tooltip-bottom">Advisers</a></li>
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
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
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
          </ul>
        </div>
      </nav>
      <!-- MOB MENU -->
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><img src="<?= base_url(); ?>assets/images/iapl/logo.png" width="120"></a>
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
        <span class="mob-menu" style="font-size:30px;cursor:pointer;float:right;margin-right:25px;" onclick="openNav()">&#9776;
          <span class="mob-logo"><img src="<?= base_url(); ?>assets/images/iapl/logo.png" width="70"></span>
        </span>
        <button class="navbar-toggler search-icon" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><img src="<?= base_url(); ?>assets/images/search.png">
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
                        <select class="form-control " name="study_level">
                          <option value="select-option">Subject of Interest</option>
                          <option value="engineering">Engineering</option>
                          <option value="management">Management</ option>
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

    </header>

    <section id="course-search-box" class="course-search-box">
      <div class="search-box">
        <div class="container">
          <div class="row">
            <div class="col-md-8 form-row-section">
              <form class="course-search" method="get">
                <div class="row">
                  <ul>
                    <li>Course search:</li>
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
                      <div class="form-group" style="display: flex;">
                        <div class="select-style">
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
                        </div>
                        <button type="btn" class="select_button">Go</button>
                      </div>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
            <div class=" col-md-2 search-row course-search-box2">
              <div class="form-group search-box-2">
                <input placeholder="Site Search" class="form-control " type="text" id="edit-keys" name="keys" value="" size="20" maxlength="255">
              </div>
            </div>
            <div class="col-md-1 go-btn course-search-box2">
              <button type="btn" class="select_button">Go</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="all-body-content">
      <!-- Home Design -->
      <div class="ulockd-home-slider">
        <div class="container-fluid">
          <div class="row">
            <div class="pogoSlider" id="js-main-slider">
              <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url(<?= base_url(); ?>assets/images/home/h1.jpg);">
                <div class="lbox-caption">
                  <div class="lbox-details">
                    <h1 class="fz60"><span class="text-thm2 bgc-white">IAPL</span> Institute </h1>
                    <h3 class="fz40 ulockd-mrgn120 ff-robotoslab">An Institute for the World.</h3>
                    <a href="programme.php">
                      <button class="btn ulockd-btn-thm2">View More <span class="fa fa-angle-double-right"></span>
                      </button>
                    </a>
                    <a href="about.php">
                      <button class="btn btn-default ulockd-btn-styledark">About Us <span class="fa fa-angle-double-right"></span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url(<?= base_url(); ?>assets/images/iapl/Home_page1.jpg);">
                <div class="lbox-caption">
                  <div class="lbox-details">
                    <h2 class="fz45">Education For Everyone.</h2>
                    <h3 class="ff-robotoslab">Education Can Change A Nation.</h3>
                    <a href="contact.php"><button class="btn btn-default ulockd-btn-styledark">Contact Us </a></button>
                  </div>
                </div>
              </div>
              <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url(<?= base_url(); ?>assets/images/iapl/Home_page2.jpg);">
                <div class="lbox-caption">
                  <div class="lbox-details">
                    <h2 class="fz48">Only Good Education</h2>
                    <h1 class="ff-robotoslab">Is The Backbone Of A Nation.</h1>
                    <button class="btn btn-default ulockd-btn-thm2">Enquiry now </button>
                    <a href="admission_form.php"> <button class="btn btn-default ulockd-btn-styledark">Join <span class="fa fa-angle-double-right"></span></button></a>
                  </div>
                </div>
              </div>
            </div><!-- .pogoSlider -->
          </div>
        </div>
      </div>
      <section>
        <div class="project-wrap">
          <div class="project-heading">
            <div class="container">
              <div class="title">
                <h1><span>Know More</span> About</h1>
              </div>
              <p>IAPL Institute (International Academy of Professional Learning) is devoted to all professionals who need to finish their education with work from any part of the world. IAPL Institute (International Academy of Professional Learning) provides blended learning (learning by means of electronic and online media as well as customary face-to-face teaching), where professionals can seek education at their ease.</p>
              <br>
              <a class="ulockd-btn-styledark" href="about.php">Read More</a>
            </div>
          </div>
          <div class="row" style="margin-right: 0px!important;">
            <div class="col-md-8">
              <div class="row feature-row">
                <div class="col-md-6">
                  <div class="projectImg">
                    <img src="<?= base_url(); ?>assets/images/iapl/ner/hybrid_online.png" alt="">
                    <div class="service-overlay">
                      <div class="heading">
                        <a href="#">Hybrid learning (Online + face to face)</a>
                      </div>
                    </div>
                    <div class="overlay-2">
                      <div class="heading-2">Hybrid learning (Online + face to face)</div>
                      <div class="text">Learning by means of electronic and online media as well as customary face-to-face teaching</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="projectImg">
                    <img src="<?= base_url(); ?>assets/images/iapl/ner/acc.png" alt="">
                    <div class="service-overlay">
                      <div class="heading"><a href="#">Accelerated course duration for experienced candidate</a></div>
                    </div>
                    <div class="overlay-2">
                      <div class="heading-2">Accelerated course duration for experienced candidate</div>
                      <div class="text">Candidate can complete course in lesser duration if candidate has over 2 years of working experience</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="projectImg"><img src="<?= base_url(); ?>assets/images/background/inner-pagebg.jpg" alt="">
                    <div class="service-overlay">
                      <div class="heading"><a href="#">Certificate Attestation Support</a></div>
                    </div>
                    <div class="overlay-2">
                      <div class="heading-2">Certificate Attestation Support</div>
                      <div class="text">Certificate attestation support will be provided by Institute (Terms & Condition apply)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">

              <img src="<?= base_url(); ?>assets/images/portfolio6.jpg" alt="" height="645">
              <div class="caption">
                <h3> Why IAPL Institute</h3>
                <h5>We deal with the of professional IT Services</h5>
                <ul>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/certificate.png" width="50" style="padding-right:10px;"> Internationally recognized certificate</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/budget.png" width="50" style="padding-right:10px;"> Reduced Cost</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/user.png" width="50" style="padding-right:10px;"> Networking Opportunity (Across Nations)</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/skills.png" width="50" style="padding-right:10px;"> Access to Expertise</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/promotion.png" width="50" style="padding-right:10px;"> Career Advancement</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/flexible-schedule-white.png" width="50" style="padding-right:10px;"> Flexible schedule and environment </li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/online-support.png" width="60" style="padding-right:10px;"> 24*7 Online support</li>
                  <li><img src="<?= base_url(); ?>assets/images/iapl/ner/job.png" width="50" style="padding-right:10px;"> Job and Placement Assistance </li>
                </ul>
              </div>

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="ulockd-divider bgc-green">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1 class="color-white">Join IAPL Institute today</h1>

            </div>
            <div class="col-md-6 text-center tal-smd">
              <a href="programme.php" class="btn btn-lg ulockd-btn-white ">- Become a Learner</button>
                <a href="<?php echo base_url();?>Instructor" class="btn btn-lg ulockd-btn-transparent ">- Become a Instructor</a>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="course-wrapper">
          <div class="container">
            <div class="row">
              <div class="title title-2">
                <h2>Popular <span>Courses</span></h2>

              </div>
            </div>
            <div class="container">
              <div id="sliderblog" class="owl-carousel owl-theme">
                <div class="single-item">
                  <div class="single-item-image overlay-effect">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/about/Mechanical.png" alt=""></a>
                  </div>
                  <div class="single-item-text">
                    <h4><a href="#">Mechanical Engineering</a></h4>
                    <p>Mechanical specialists produce particulars for, design, develop, manufacture and put in new or adjusted mechanical components or frameworks. Mechanical engineers need to be technically minded, ready to show mathematical and scientific capacity and have critical thinking ability.</p>
                  </div>
                  <div class="button-bottom">
                    <a href="#" class="btn button-default">Learn Now</a>
                  </div>
                </div>
                <div class="single-item">
                  <div class="single-item-image overlay-effect">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/about/civil.png" alt=""></a>
                  </div>
                  <div class="single-item-text">
                    <h4><a href="#">Civil Engineering</a></h4>
                    <p>Civil engineers make, improve and ensure the environment in which we live. They plan, design and oversee construction and maintenance of building structures and foundation, for example street, railroads, air terminals, bridges, harbours, dams, water system projects, power plants, and water and sewerage systems.</p>
                  </div>
                  <div class="button-bottom">
                    <a href="#" class="btn button-default">Learn Now</a>
                  </div>
                </div>
                <div class="single-item">
                  <div class="single-item-image overlay-effect"> <a href="#">
                      <img src="<?= base_url(); ?>assets/images/about/HSE.png" alt=""></a>
                  </div>
                  <div class="single-item-text">
                    <h4><a href="#">HSE (Health Safety and Environment Engineering) </a></h4>
                    <p>Prepares the project's safety plan and is liable for guaranteeing safety and executing work in consistence with organization's safety procedure, government safety and guidelines, principles and techniques just as customer's safety requirements.</p>
                  </div>
                  <div class="button-bottom">
                    <a href="#" class="btn button-default">Learn Now</a>
                  </div>
                </div>
                <div class="single-item">
                  <div class="single-item-image overlay-effect">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/about/business.png" alt=""></a>
                  </div>
                  <div class="single-item-text">
                    <h4><a href="#">Business Management</a></h4>
                    <p>Management is the demonstration of distributing assets to achieve wanted targets and objectives productively and successfully, it involves planning, sorting out, staffing, driving or coordinating and controlling an association or effort for the purpose of achieve an objective.</p>
                  </div>
                  <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
                </div>
                <div class="single-item">
                  <div class="single-item-image overlay-effect">
                    <a href="#"><img src="<?= base_url(); ?>assets/images/about/project.png" alt=""></a>
                  </div>
                  <div class="single-item-text">
                    <h4><a href="#">Project Management </a></h4>
                    <p>Project managers are the individuals accountable for a particular undertaking or ventures inside an organization. As the project manager, your responsibility is to design, spending plan, administer and record all parts of the particular project you are working on. Project managers may work without anyone else, or be accountable of a team to get the job done.
                    </p>
                  </div>
                  <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="csr-section ">
        <div class="col-md-12 text-center">
          <div class="title title-2">
            <h2>CSR <span>(Corporate Social Responsibility)</span></h2>
          </div>
        </div>
        <div class="about-wrapper">
          <div class="about-wrapper-inner">
            <div class="container">
              <div class="row">
                <div class="aboutus-box">
                  <div class="col-sm-4 aboutus-box-image"><img src="<?= base_url(); ?>assets/images/iapl/ngo.png" class="img-responsive" alt="">
                  </div>
                  <div class="col-sm-8 aboutus-box-body">
                    <div class="aboutus-box-body-content">
                      <h3>Charity pickup world</h3>
                      <p>Charity at your door step:<br>
                        Don’t throw away your unwanted items. We can’t help everyone but everyone can help someone. So if you can't make it down to one of the charity organisations to donate your things we can collect them from your home for free. Time-saving for you, life-saving for everyone.
                        Together we can make a change!
                      </p>
                    </div>
                    <div class="about-btn"> <a href="#" class="btn">Read More</a> </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="aboutus-box">
                  <div class="col-sm-6 aboutus-box-body">
                    <div class="aboutus-box-body-content">
                      <p>One good thing about donation, once you do it, you get addicted to it because it brings great joy and happiness to you by just watching people smile. That smile is worth everything!
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-6 aboutus-box-image"><img src="<?= base_url(); ?>assets/images/iapl/labour.png" class="img-responsive" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div style="background-image:url(<?= base_url(); ?>assets/images/iapl/home-1.jpg);background-size: cover;background-repeat: no-repeat;" class="about-bg  bg-image">
          </div>
        </div>
      </section>
      <section class="divider-triangle half-block">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 hire-section">
              <h2 class="ulockd-mrgn120 tac-smd">Why to hire IAPL Institute candidates?</h2>
              <div class="icon_box text-left tac-smd">
                <div class="icon pull-left fn-smd"><span class="flaticon-study text-thm2"></span></div>
                <div class="ib_details">
                  <h4>Proven experience with industry knowledge</h4>
                  <p></p>
                </div>
              </div>
              <div class="icon_box text-left tac-smd">
                <div class="icon pull-left fn-smd"><span class="flaticon-people-2 text-thm2"></span></div>
                <div class="ib_details">
                  <h4> Certified from IAPL Institute</h4>
                  <p></p>
                </div>
              </div>
              <div class="icon_box text-left tac-smd">
                <div class="icon pull-left fn-smd"><span class="flaticon-lab-microscope text-thm2"></span></div>
                <div class="ib_details">
                  <h4>Known to latest technology</h4>
                  <p></p>
                </div>
              </div>
              <div class="icon_box text-left tac-smd">
                <div class="icon pull-left fn-smd"><span class="flaticon-computer-class-room text-thm2"></span></div>
                <div class="ib_details">
                  <h4>Less training is required </h4>
                  <p></p>
                </div>
              </div>
              <div class="icon_box text-left tac-smd">
                <div class="icon pull-left fn-smd"><span class="flaticon-cogwheel text-thm2"></span></div>
                <div class="ib_details">
                  <h4>A more responsible attitude</h4>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="ulockd-blog">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="ulockd-main-title">
                <h2 class="text-center ulockd-mrgn120 title">Updated <span>News</span></h2>
                <div class="mt-separator"></div>
              </div>
              <div class="one-grid-slider">
                <div class="item">
                  <div class="testimonial-grid ">
                    <div class="t_thumb">
                      <img class="img-responsive" src="<?= base_url(); ?>assets/images/testimonial/1.jpg" alt="1.jpg">
                      <span class="icon icon_quotations_alt text-thm2"></span>
                    </div>
                    <div class="t_details">
                      <h4>Alanna Smi</h4>
                      <h5>Msc Mathematics</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                    </div>
                  </div>
                  <div class="testimonial-grid ulockd-mrgn1220">
                    <div class="t_thumb">
                      <img class="img-responsive" src="<?= base_url(); ?>assets/images/testimonial/2.jpg" alt="2.jpg">
                      <span class="icon icon_quotations_alt text-thm2"></span>
                    </div>
                    <div class="t_details">
                      <h4>Liam Edge</h4>
                      <h5>Graduate 2014</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-grid ">
                    <div class="t_thumb">
                      <img class="img-responsive" src="<?= base_url(); ?>assets/images/testimonial/3.jpg" alt="3.jpg">
                      <span class="icon icon_quotations_alt text-thm2"></span>
                    </div>
                    <div class="t_details">
                      <h4>Anastasia El</h4>
                      <h5>Graduate 2012</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                    </div>
                  </div>
                  <div class="testimonial-grid ulockd-mrgn1220">
                    <div class="t_thumb">
                      <img class="img-responsive" src="<?= base_url(); ?>assets/images/testimonial/4.jpg" alt="4.jpg">
                      <span class="icon icon_quotations_alt text-thm2"></span>
                    </div>
                    <div class="t_details">
                      <h4>Ethan Scott</h4>
                      <h5>Graduate 2012</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
              <div class="ulockd-main-title">
                <h2 class="text-center ulockd-mrgn120 title">Our Popular<span> Post</span></h2>
                <div class="mt-separator"></div>
              </div>
              <div class="two-grid-slider">
                <div class="item">
                  <article class="blog_post text-left">
                    <div class="post_thumb">
                      <img class="img-responsive img-whp" src="<?= base_url(); ?>assets/images/blog/1.jpg" alt="1.jpg">
                      <ul class="list-inline post_meta">
                        <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Ulockd</a></li>
                        <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                      </ul>
                    </div>
                    <div class="post_details">
                      <h4>Popular Blog Post</h4>
                      <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                      <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                      <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="blog_post text-left">
                    <div class="post_thumb">
                      <img class="img-responsive img-whp" src="<?= base_url(); ?>assets/images/blog/2.jpg" alt="2.jpg">
                      <ul class="list-inline post_meta">
                        <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Ulockd</a></li>
                        <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                      </ul>
                    </div>
                    <div class="post_details">
                      <h4>Popular Blog Post</h4>
                      <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                      <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                      <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="blog_post text-left">
                    <div class="post_thumb">
                      <img class="img-responsive img-whp" src="<?= base_url(); ?>assets/images/blog/1.jpg" alt="1.jpg">
                      <ul class="list-inline post_meta">
                        <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Ulockd</a></li>
                        <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                      </ul>
                    </div>
                    <div class="post_details">
                      <h4>Popular Blog Post</h4>
                      <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                      <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                      <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="blog_post text-left">
                    <div class="post_thumb">
                      <img class="img-responsive img-whp" src="<?= base_url(); ?>assets/images/blog/4.jpg" alt="4.jpg">
                      <ul class="list-inline post_meta">
                        <li><a class="text-thm2" href="#"><span class="flaticon-people-2"></span> Ulockd</a></li>
                        <li><a class="text-thm2" href="#"><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                      </ul>
                    </div>
                    <div class="post_details">
                      <h4>Popular Blog Post</h4>
                      <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                      <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                      <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <div class="title title-2">
                <h2>Student Testimonials &<br><span>Success Stories</span></h2>
              </div>


            </div>
            <div class="two-grid-slider">
              <div class="item">
                <article class="blog_post text-left">
                  <!-- 	<div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>	 -->
                  <div class="testimonial-desc">
                    <!--  <img src="<?= base_url(); ?>assets/images/testimonials1.png" alt=""> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="testimonial-title">
                      <h3>- Michal Marek</h3>
                      <h4>Sales Manager</h4>
                    </div>
                  </div>

                </article>
              </div>
              <div class="item">
                <article class="blog_post text-left">

                  <div class="testimonial-desc">
                    <!--  <img src="<?= base_url(); ?>assets/images/testimonials1.png" alt=""> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="testimonial-title">
                      <h3>- Michal Marek</h3>
                      <h4>Sales Manager</h4>
                    </div>
                  </div>

                </article>
              </div>
              <div class="item">
                <article class="blog_post text-left">

                  <div class="testimonial-desc">
                    <!-- <img src="<?= base_url(); ?>assets/images/testimonials1.png" alt=""> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="testimonial-title">
                      <h3>- Michal Marek</h3>
                      <h4>Sales Manager</h4>
                    </div>
                  </div>

                </article>
              </div>
              <div class="item">
                <article class="blog_post text-left">

                  <div class="testimonial-desc">
                    <!-- <img src="<?= base_url(); ?>assets/images/testimonials1.png" alt=""> -->
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="testimonial-title">
                      <h3>- Michal Marek</h3>
                      <h4>Sales Manager</h4>
                    </div>
                  </div>

                </article>
              </div>
            </div>
          </div>

        </div>
      </section>

<script type="text/javascript">
$('#sliderblog').owlCarousel({
    loop:true,
    margin:30,
    
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

</script>