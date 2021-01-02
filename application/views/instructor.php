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
		
		<link rel="stylesheet" href="css/main-style.css">
		 
   
	
	<!-- Title -->
		<title>Education </title>
	<!-- Favicon -->
	 <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <style type="text/css">
.blog_post
{
  margin-bottom: 20px;
     -webkit-box-shadow: 0 2px 24px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 24px rgba(0, 0, 0, 0.2); 
}

  .instructor-banner h1, h3
  {
    color: #fff;
      text-transform: capitalize;
  }
  .skill-content p
  {
    text-align: center;
  }
   .team-memb span
  {
    font-weight: bold;
    font-size: 17px;
  }
  #addLiveOthers {
  display:none;
}
    </style>
</head>


<body>
   <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
        <!--header start-->
      
        <!--header end-->

          <section class="career-area">
               <div class="ulockd-inner-home">
                    <div class="container text-center">
                        <div class="row">
                            <div class="inner-conraimer-details">
                                 <div class="col-md-12">
                                     <h1 class="text-uppercase">- Become a Instructor</h1>
                                </div>
                           </div>
                      </div>
                   </div>
              </div>
                <div class="ulockd-inner-page">
                    <div class="container">
                         <div class="row">
                              <div class="col-md-12">
                                  <div class="ulockd-icd-layer">
                                        <ul class="list-inline ulockd-icd-sub-menu">
                                            <li><a href="<?php echo base_url();?>"> HOME </a></li>
                                            <li><a href="#"> ||</a></li>
                                            <li> <a href="#"> - Become a Instructor</a> </li>
                                        </ul>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
       </section>
      <section class="skill-section">
          <div class="instructor-banner">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <h1>Use your teaching skills here</h1>
                           <h3>Become our online instructor</h3>
                           <button class="btn btn-default ulockd-btn-thm2" data-toggle="modal" data-target=".bs-instructor-modal-lg" data-whatever="@mdo">Become an instructor </button>
                           <div class="modal fade bs-instructor-modal-lg" tabindex="-1" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-lg" role="document">
                                     <div class="modal-content">
                                          <div class="modal-header">
                                              <h2 class="modal-title " >Become an instructor</h2>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                         </div>
                                         <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-sm-12 col-md-10 ulockd-reg-form" style="margin-left: 8%;">   
                                                      <form class="row" method="POST" action='<?php echo base_url();?>Instructor/get_instructor_form_data'>
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                  <input type="text" name="name" class="form-control" id="exampleInputNamexa" placeholder="Full Name" required>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <div class="form-group">
                                                                  <input name="phone" type="text" placeholder="Phone Number*"  class="form-control ">
                                                              </div>
                                                           </div>
                                                          <div class="col-md-6">
                                                              <div class="form-group">
                                                                 <input type="email" name='email' class="form-control" id="exampleInputEmailx" placeholder="Email">
                                                               </div>
                                                           </div>
                                                            <div class="col-md-12">
                                                               <div class="form-group ">
                                                                  <label for="q1">Q. What kind of teaching have you done before?</label><br>
                                                               
                                                                  <ul  class="radio-list">
                                                                    <li>
    <input type="radio" name="addLive" value="Informal" onclick="showText(1)" checked="" > <label for="Informal">Informal</label></li>
    <li>
    <input type="radio" name="addLive" value="Professional" onclick="showText(2)"> <label for="female">Professional</label></li>
    <li>
    <input type="radio" name="addLive" value="Online" onclick="showText(3)"> <label for="other">Online</label></li>
    <li>
    <input type="radio" name="addLive" value="" id="showAddLiveOthers"  onclick="showText(4)">          <label for="other">Other</label></li>
    <input type="text" name ="addLiveOthers" id="addLiveOthers">
    </ul> 
                                                              </div>
                                                            </div>
                                                                  <script type="text/javascript">
                                                                        function showText(num){
                                                                          if(num==4){ document.getElementById('addLiveOthers').style.display='block';}
                                                                          else {document.getElementById('addLiveOthers').style.display='none';}
                                                                              return;
                                                                                }   
                                                                     </script>
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                  <label for="q2">Q. What courses could you offer to teach?</label>
                                                                   <textarea name="offered_course" rows="1" placeholder="" class="form-control bg-white"></textarea>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                   <label for="q3">Q. How would you contribute to the administration of the department?</label>
                                                                    <textarea name="contrib_to_administration" rows="1" placeholder="" class="form-control bg-white"></textarea>
                                                              </div>
                                                           </div>
                                                          <div class="col-md-12">
                                                              <div class="form-group    ">
                                                                 <label for="q4">Q. How much of a video “pro” are you?</label><br>
                                                                 <ul  class="radio-list">
                                                                    <li>
                                                                       <input type="radio"   name="experienced" value="I am a beginner" checked=""> 
                                                                       <label for="beginner">I am a beginner</label>
                                                                     </li>
                                                                    <li>
                                                                      <input type="radio" name="experienced" value="I have some knowledge">
                                                                      <label for="female">I have some knowledge</label>
                                                                    </li>
                                                                    <li>
                                                                      <input type="radio" name="experienced" value="I am experienced">
                                                                      <label for="other">I am experienced</label>
                                                                    </li>
                                                                    <li>
                                                                     <input type="radio" name="experienced" value="I have videos ready to upload">
                                                                      <label for="other">I have videos ready to upload</label>
                                                                    </li>
                                                                </ul>                                
                                                            </div>
                                                          </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="q5">Q. What kind of an institution would you consider an ideal match for your professional talents and interests?</label>
                                                                    <textarea name="kind_of_institution" rows="1" placeholder="" class="form-control bg-white"></textarea>
                                                                </div>
                                                            </div>
                                                          <div class="col-md-12">
                                                               <div class="form-group">
                                                                   <label for="q6">Q. What is your philosophy of online teaching and learning?</label>
                                                                    <textarea name="philosophy" rows="1" placeholder="" class="form-control bg-white"></textarea>
                                                                </div>
                                                          </div>
                                                          <div class="col-md-12">
                                                               <div class="form-group">
                                                                   <label for="q7">Q. What are your professional goals?</label>
                                                                  <textarea name="professional_goals" rows="1" placeholder="" class="form-control bg-white"></textarea>
                                                             </div>
                                                          </div>     
                                                           <div class="col-md-12">
                                                               <div class="form-group text-center">
                                                                   <button type="submit" class="btn btn-default ulockd-btn-thm2">Submit</button>
                                                              </div>
                                                          </div>
                                                       </form>
                                                  </div>
                                             </div>  
                                        </div>
                              <!-- modal footer start here-->
                                   </div>
                              </div>
                         </div>
                     </div>         
                </div> 
            </div>         
      </div>
           <div class="container"> 
                <div class="row">
                     <div class="col-md-12 text-center " style="margin-top: 50px;">
                          <div class="title title-2">
                                <h2>Showcase your<span> skill</span></h2>
                           </div>
                     </div>
                       <div class="col-md-4 text-center skill-box">
                             <div class="skill-icon ">
                                   <img src="<?php echo base_url();?>assets/images/iapl/ner/like.png">
                              </div>
                                <div class="skill-content ">
                                      <h4>Become an Instructor</h4>
                                       <p>Qualify in an Interview</p>
                                </div>
                        </div>
                            <div class="col-md-4 text-center skill-box">
                                  <div class="skill-icon ">
                                      <img src="<?php echo base_url();?>assets/images/iapl/ner/video-tutorial.png">
                                  </div>
                                  <div class="skill-content ">
                                      <h4>Record your lecture from your place</h4>
                                       <p>Record the lecture, on decided curriculum and send lecture to Institute</p>
                                  </div>
                           </div>

                            <div class="col-md-4 text-center skill-box">
                                  <div class="skill-icon  ">
                                      <img src="<?php echo base_url();?>assets/images/iapl/ner/profit.png">
                                  </div>
                                  <div class="skill-content ">
                                      <h4>Earn Money</h4>
                                       <p>Get paid monthly through electronic payment mode</p>
                                  </div>
                           </div>
                     </div>
               </div>                                 

                      
                  <div class="container"> 
                        <div class="row">
                             <div class="col-md-12 text-center " style="margin-top: 50px;">
                                  <div class="title title-2">
                                       <h2>Expand your <span> reach</span></h2>
                                             <p style="text-align: center;margin-bottom: 10px;">We've changed lives by associating instructors with candidates the world over and we have some instructor messages</p>    
                                  </div>
                                                                  </div>
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-12 ">
                                   
                                  </div>
                                    <div class="col-md-4">
                                        <div class="facility" style="border-top:6px solid #172b53;">
                                            <div class="facility-messages">
                                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                              </p>

                                        </div>
                                        <div class="facility-member">
                                                                  <ul class="list-inline course-feature">
                  <li><img src="<?php echo base_url();?>assets/images/testimonial/1.jpg" class="rounded-circle" ></li>
                  
                  
                  <li class="team-memb"><span>- Michal Marek</span> <h6>Mechnical Engineer</h6></li>
                 
                </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
    
                                        <div class="facility" style="border-top:6px solid #ffc107;">
                                            <div class="facility-messages">
                                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                              </p>
                                        </div>
                                        <div class="facility-member">
                                                                 <ul class="list-inline course-feature">
                  <li><img src="<?php echo base_url();?>assets/images/testimonial/2.jpg" class="rounded-circle" ></li>
                  
                  
                  <li class="team-memb"><span>- Michal Marek</span> <h6>Mechnical Engineer</h6></li>
                 
                </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="facility" style="border-top:6px solid #1baa4b;">
                                            <div class="facility-messages">
                                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                              </p>

                                        </div>
                                         <div class="facility-member">
                                          <ul class="list-inline course-feature">
                  <li><img src="<?php echo base_url();?>assets/images/testimonial/3.jpg" class="rounded-circle" ></li>
                  
                  
                  <li class="team-memb"><span>- Michal Marek</span> <h6>Mechnical Engineer</h6></li>
                 
                </ul>
                                               
                                                   

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
            </section>

  

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

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <!-- <script type="text/javascript" src="js/jquery-1.12.4.js"></script> -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>