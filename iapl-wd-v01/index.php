<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- css file -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/nav-style.css">
		<link rel="stylesheet" href="css/main-style.css">
		 <link href="slider/ninja-slider.css" rel="stylesheet" type="text/css" />
   
	
	<!-- Title -->
		<title>Education </title>
	<!-- Favicon -->
	 <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0px 30px";
     document.getElementById("navbar").style.backgroundColor = "#fff";
      document.getElementById("navbar").style.top = "0%";
  } else {
    document.getElementById("navbar").style.padding = "0px 20px";
    document.getElementById("navbar").style.backgroundColor = "rgb(255 255 255 / 25%)";
    document.getElementById("navbar").style.top = "17%";
  }
}
</script>
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" ></script>
	<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js" ></script>
<body>
    <header> 
   	    <div class="ttm-topbar-wrapper clearfix">
           <div class="container">
               <div class="ttm-topbar-content">
                  <!-- <ul class="top-contact text-left">
                     <li><i class="fa fa-phone"></i><a href="tel:">+91 9899202647</a></li>
                       <li><i class="fa fa-envelope-o"></i><a href="mailto:clicknear0@gmail.com">clicknear0@gmail.com</a></li>
                 </ul> -->
                        <div class="topbar-right text-right">
                          <div class="ttm-social-links-wrapper list-inline">
                               <ul class="top-section-menu">
                                   <li><a href="#" class="tooltip-bottom">Star Students</a></li>
                                    <li><a href="#" class=" tooltip-bottom">Board Member</a></li>
                                    <li><a href="#" class=" tooltip-bottom" >Alumni</a></li>
                                    <li><a href="#" class="">Faq</a></li>
                                </ul>
                            </div>
                            	<div class="header-btn">
                                	 <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#"> Helping Hands </a>
                                </div>
                        </div>
                  </div>
             </div>
         </div>

<nav id="navbar" class="navbar navbar-expand-md fixed-top" >
  <a class="navbar-brand" href="#" id="logo"><img src="images/iapl/logo.png" width="80"></a>
  <button class="navbar-toggler"  onclick="myfunction(this)" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <div class="bar1"></div>
        <div class="bar2"></div>
            <div class="bar3"></div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Programmes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admission Process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Student words</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Blogs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Extra Mile</a>
      </li>
         
    </ul>
  </div>  
</nav>

 </header>  
    <section class="course-search-box">
			<div class="search-box">
			<div class="container">
				
				<div class="row">
					<div class="col-md-8 form-row-section">
						<form class="course-search" method="get">
							<div class="row">
								<!-- <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-2"> -->
				                    
					              <ul>
					                 <li>   	University search:</li>
					                        <li>
					                    	
					                        <select id="study_level" class="study_level form-control ulockd-bgthm" name="study_level">
				                                <option value="select-option">Study Level</option>
				                                <option value="primarylevel">Primary Level</option>
				                                <option value="olevel">O Level</option>
				                                <option value="alevel">A Level</option>
				                                <option value="hlevel">Higher Level</option>
				                                <option value="discuss">Other Courses</option>
					                        </select>
					                    </li>
				                    
								<li>
								       <div class="select-style">
					                        <select id="Subject_of_Interest" class="Subject_of_Interest form-control ulockd-bgthm" name="Subject_of_Interest">
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
				                </li>

								
								<li>
											<div class="form-group" style="display: flex;">

										   <div class="select-style">

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
			<section>
<div class="container-full">
<div id="ninja-slider">
        <div class="slider-inner">
            <ul style="overflow: hidden; padding-top: 50%; height: 0px;"><li class="ns-show" style="left: 0px; z-index: 1;">
                    <a class="ns-img" href="img/1.jpg" style="transform-origin: left bottom; background-image: url(images/home/h1.jpg);"></a>
                   
                </li><li class="" style="z-index: -1; left: 0px;">
                    <a class="ns-img" href="img/2.jpg" style="background-image: url(images/iapl/Home_page1.jpg); transform-origin: left top;"></a>
                   
                </li><li class="" style="z-index: -1; left: 0px;">
                    <a class="ns-img" href="img/3.jpg" style="background-image: url(images/iapl/Home_page2.jpg); transform-origin: left center;"></a>
                </ul>
            <div class="navsWrapper">
                <div id="ninja-slider-prev" class="disabled"><div>1 ∕ 5</div></div>
                <div id="ninja-slider-next" class=""><div>1 ∕ 5</div></div>
            </div>
        <div id="ninja-slider-pager"><a rel="0" class="active">1</a><a rel="1" class="">2</a><a rel="2" class="">3</a><a rel="3" class="">4</a><a rel="4" class="">5</a></div><div id="ninja-slider-pause-play" class=""></div></div>
    </div>
</div>
</section>

<section >
					
				<div class="project-wrap">
  <div class="project-heading">
    <div class="container">
      <div class="title">
        <h1><span>Now More</span> About</h1>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quam nisi, sollicitudin venenatis nisl id, iaculis pharetra quam. <span>Vivamus cursus est vel sagittis tristique. Nunc vel ligula mollis, imperdiet dolor quis, consectetur magna. Duis facilisis tempor lectus tempus dignissim. Praesent lacus ante, mattis sit amet purus non, suscipit pellentesque odio.</span></p>
    </div>
  </div>
  <div class="row">
  <div class="col-md-8">
<div class="row">
    <div class="col-md-6">
      <div class="projectImg"><img src="images/iapl/ner/hybrid_online.png" alt="">
        <div class="service-overlay">
          <div class="heading"><a href="#">Hybrid learning (Online + face to face)</a></div>
        </div>
        <div class="overlay-2">
        	<div class="heading-2">Hybrid learning (Online + face to face)</div>
    <div class="text">Learning by means of electronic and online media as well as customary face-to-face teaching</div>

      </div>
    </div>
</div>
    <div class="col-md-6">
      <div class="projectImg"><img src="images/iapl/ner/acc.png" alt="">
        <div class="service-overlay">
          <div class="heading"><a href="#">Accelerated course duration for experienced candidate</a></div>
        
        </div>
        <div class="overlay-2">
        	<div class="heading-2">Accelerated course duration for experienced candidate</div>
    <div class="text">Candidate can complete course in lesser duration if candidate has over 2 years of working experience</div>

      </div>
      </div>
    </div>
    <!-- <div class="col-md-4">
      <div class="projectImg"><img src="images/gallery/13.jpg" alt="">
        <div class="service-overlay">
          <div class="heading"><a href="#">Interior Design</a></div>
          <p>Design &amp; Consult</p>
        </div>
      </div>
    </div> -->
    <div class="col-md-12">
      <div class="projectImg"><img src="images/background/inner-pagebg.jpg" alt="">
        <div class="service-overlay">
          <div class="heading"><a href="#">Certificate Attestation Support</a></div>
          
        </div>
        <div class="overlay-2">
        	<div class="heading-2">Certificate Attestation Support</div>
    <div class="text">Certificate attestation support will be provided by Institute (Terms & Condition apply)</div>

      </div>
      </div>
    </div>
   <!--  <div class="col-md-4">
      <div class="projectImg"><img src="images/blog/1.jpg" alt="">
        <div class="service-overlay">
          <div class="heading"><a href="#">Interior Design</a></div>
          <p>Design &amp; Consult</p>
        </div>
      </div>
    </div> -->
  </div>
</div>
  <div class="col-md-4">
    <div class="row ">
    	<img src="images/portfolio6.jpg" alt="" height="652">
    		
      <div class="caption">
        	<h3> Why IAPL Institute</h3>
        <h5>We deal with the of professional IT Services</h5>
      		<ul>
      			<li><img src="images/iapl/ner/certificate.png" width="50" style="padding-right:10px;"> Internationally recognized certificate</li>
<li><img src="images/iapl/ner/budget.png" width="50" style="padding-right:10px;"> Reduced Cost</li>
<li><img src="images/iapl/ner/user.png" width="50" style="padding-right:10px;"> Networking Opportunity (Across Nations)</li>
<li><img src="images/iapl/ner/skills.png" width="50" style="padding-right:10px;"> Access to Expertise</li>
<li><img src="images/iapl/ner/promotion.png" width="50" style="padding-right:10px;"> Career Advancement</li>
<li><img src="images/iapl/ner/flexible-schedule-white.png" width="50" style="padding-right:10px;"> Flexible schedule and environment </li>
<li><img src="images/iapl/ner/Capture.png" width="50" style="padding-right:10px;"> 24*7 Online support</li>
<li><img src="images/iapl/ner/job.png" width="50" style="padding-right:10px;"> Job and Placement Assistance </li>

      		</ul>
      
    </div>
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
					<a href="#" class="btn btn-lg ulockd-btn-white ">-	Become a Learner</button>
					<a href="#" class="btn btn-lg ulockd-btn-transparent ">-	Become a Instructor</a>
				</div>
			</div>
		</div>
	</section>

<section class="testimonial ">
	

  
<div class="course-wrapper">
  <div class="container">
    <div class="row">
      <div class="title title-2">
        <h2>Popular <span>Courses</span></h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      </div>
    </div>
    <div class="container">
      <div id="sliderblog"class="owl-carousel owl-theme">
        <div class="single-item">
          <div class="single-item-image overlay-effect"> <a href="#"><img src="images/about/Mechanical.png" alt=""></a> </div>
          <div class="single-item-text">
            <h4><a href="#">Mechanical Engineering</a></h4>

            <p>Mechanical specialists produce particulars for, design, develop, manufacture and put in new or adjusted mechanical components or frameworks. Mechanical engineers need to be technically minded, ready to show mathematical and scientific capacity and have critical thinking ability.</p>
            
          </div>
          <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
        </div>
     
        <div class="single-item">
          <div class="single-item-image overlay-effect"> <a href="#"><img src="images/about/civil.png" alt=""></a> </div>
          <div class="single-item-text">
            <h4><a href="#">Civil Engineering</a></h4>
      
            <p>Civil engineers make, improve and ensure the environment in which we live. They plan, design and oversee construction and maintenance of building structures and foundation, for example street, railroads, air terminals, bridges, harbours, dams, water system projects, power plants, and water and sewerage systems.</p>
            
          </div>
          <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
        </div>
      
      
        <div class="single-item">
          <div class="single-item-image overlay-effect"> <a href="#"><img src="images/about/HSE.png" alt=""></a> </div>
          <div class="single-item-text">
            <h4><a href="#">HSE (Health Safety and Environment Engineering) </a></h4>
            
            <p>Prepares the project's safety plan and is liable for guaranteeing safety and executing work in consistence with organization's safety procedure, government safety and guidelines, principles and techniques just as customer's safety requirements.</p>
            
          </div>
          <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
        </div>
        <div class="single-item">
          <div class="single-item-image overlay-effect"> <a href="#"><img src="images/about/business.png" alt=""></a>
           </div>
          <div class="single-item-text">
            <h4><a href="#">Business Management</a></h4>
            
            <p>Management is the demonstration of distributing assets to achieve wanted targets and objectives productively and successfully, it involves planning, sorting out, staffing, driving or coordinating and controlling an association or effort for the purpose of achieve an objective.</p>
            
          </div>
          <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
        </div>
        <div class="single-item">
          <div class="single-item-image overlay-effect"> <a href="#"><img src="images/about/project.png" alt=""></a> </div>
          <div class="single-item-text">
            <h4><a href="#">Project Management </a></h4>
            
            <p>Project managers are the individuals accountable for a particular undertaking or ventures inside an
organization. As the project manager, your responsibility is to design, spending plan, administer and record all parts of the particular project you are working on. Project managers may work without anyone else, or be accountable of a team to get the job done.
</p>
            
          </div>
          <div class="button-bottom"> <a href="#" class="btn button-default">Learn Now</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="csr-section ">
		    	<div class="col-md-12 text-center">
      		<div class="title title-2">
        			<h2>CSR <span>(Corporate Social Responsibility)</span></h2>
   
      		  </div>

      	</div>
<div class="about-wrapper">
  <div class="about-wrapper-inner">
    <div class="container">
    		  

      <div class="aboutus-box">
        <div class="col-sm-4 aboutus-box-image"><img src="images/iapl/ngo.png" class="img-responsive" alt=""></div>
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
      <div class="aboutus-box">
        
        <div class="col-sm-6 aboutus-box-body">
          <div class="aboutus-box-body-content">
           
            <p>One good thing about donation, once you do it, you get addicted to it because it brings great joy and happiness to you by just watching people smile. That smile is worth everything!
</p>
   
          </div>
          
        </div>
        <div class="col-sm-6 aboutus-box-image"><img src="images/iapl/labour.png" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
  <div style="margin-left: -16%;margin-right:  -16%;background-image:url(images/iapl/home-1.jpg);background-size: cover;background-repeat: no-repeat;" class="about-bg bg-image"></div>
</div>
</section>
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
								<div class="testimonial-grid text-center">
								    <div class="t_thumb">
									    <img class="img-responsive" src="images/testimonial/1.jpg" alt="1.jpg">
									    <span class="icon icon_quotations_alt text-thm2"></span>
								    </div>
								    <div class="t_details">
										<h4>Alanna Smi</h4>
										<p>Msc Mathematics</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
								    </div>
								</div>
								<div class="testimonial-grid text-center ulockd-mrgn1220">
								    <div class="t_thumb">
									    <img class="img-responsive" src="images/testimonial/2.jpg" alt="2.jpg">
									    <span class="icon icon_quotations_alt text-thm2"></span>
								    </div>
								    <div class="t_details">
										<h4>Liam Edge</h4>
										<p>Graduate 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
								    </div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-grid text-center">
								    <div class="t_thumb">
									    <img class="img-responsive" src="images/testimonial/3.jpg" alt="3.jpg">
									    <span class="icon icon_quotations_alt text-thm2"></span>
								    </div>
								    <div class="t_details">
										<h4>Anastasia El</h4>
										<p>Graduate 2012</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui dicta vitae sit, eos saepe ratione eaque sint error, sapiente omnis quis aspernatur.</p>
								    </div>
								</div>
								<div class="testimonial-grid text-center ulockd-mrgn1220">
								    <div class="t_thumb">
									    <img class="img-responsive" src="images/testimonial/4.jpg" alt="4.jpg">
									    <span class="icon icon_quotations_alt text-thm2"></span>
								    </div>
								    <div class="t_details">
										<h4>Ethan Scott</h4>
										<p>Graduate 2012</p>
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
										<img class="img-responsive img-whp" src="images/blog/1.jpg" alt="1.jpg">
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
										<img class="img-responsive img-whp" src="images/blog/2.jpg" alt="2.jpg">
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
										<img class="img-responsive img-whp" src="images/blog/1.jpg" alt="1.jpg">
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
										<img class="img-responsive img-whp" src="images/blog/4.jpg" alt="4.jpg">
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
        				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
      		  </div>
  

			</div>
				<div class="two-grid-slider">
							<div class="item">
								<article class="blog_post text-left">
				<!-- 	<div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>	 -->					
              <div class="testimonial-desc"> <img src="images/testimonials1.png" alt="">
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
														
              <div class="testimonial-desc"> <img src="images/testimonials1.png" alt="">
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
														
              <div class="testimonial-desc"> <img src="images/testimonials1.png" alt="">
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
														
              <div class="testimonial-desc"> <img src="images/testimonials1.png" alt="">
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

    <!-- footer-start -->
    <?php include 'footer.php';?>
    <!-- footer-end -->
		<div class="btn-section">
<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

<div class="smbtn-fx">
        <nav class="social">
            <ul>
                <li style="background: rgb(66, 103, 178) !important;"><a href="#!" style="color: #4267B2 !important;"><b>Facebook</b><i class="fa fa-facebook f-col"></i></a></li>
                   <li style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)!important;"><a href="#!" style="color: #fd5949!important;"><b>Instagram</b><i class="fa fa-instagram i-col"></i></a></li>
              
                <li style="background: #0B66C3 !important;"><a href="#!" style="color: #0B66C3 !important;"><b>LinkedIn</b><i class="fa fa-linkedin l-col"></i></a></li>
                  <li style="background: #259c07 !important;"><a href="#!" style="color: #259c07 !important;"><b>Whatsapp</b><i class="fa fa-whatsapp t-col"></i></a></li>
                
             
            </ul>
        </nav>
 

        <!-- <nav class="social" style="top:90%!important">
   <ul>  <li style="background: #259c07 !important;"><a href="tel:9999226424" style="color: #259c07 !important;"><b>Call US </b><i class="fa fa-phone"></i></a></li></ul>
      </nav> -->
   </div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



<script type="text/javascript">
  function myfunction(X){
    X.classList.toggle("change");
  }

</script>
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
  <script src="slider/ninja-slider.js"></script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
 <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>

 <!--  <script type="text/javascript" src="js/color-switcher.js"></script> -->
<script type="text/javascript" src="js/script.js"></script><!-- 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>