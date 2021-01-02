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
        .card-link i
        {
          float: right;
              font-size: 18px;
    color: #172b53;
        }
        .admission_card
        {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .1), 0 6px 20px 0 rgba(255, 255, 255, .15);
            border: none;
        }
        #datepicker{width:180px; margin: 0 20px 20px 20px;}
#datepicker > span:hover{cursor: pointer;}
    </style>
</head>


<body>
   <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
        <!--header start-->
       <?php include 'header.php';?>
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
                                            <li><a href="index.php"> HOME </a></li>
                                            <li><a href="#"> ||</a></li>
                                            <li> <a href="#"> - Become a Instructor</a> </li>
                                        </ul>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
       </section>
     
  <section class="admission_form">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div id="accordion">
                     <div class="card admission_card">
                          <div class="card-header">
                               <a class="collapsed card-link" data-toggle="collapse" href="#collapseZero">
                                    Course selection <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                           <div id="collapseZero" class="collapse" data-parent="#accordion">
                                 <div class="card-body">
                                     <form class="course-search" method="get">
                                         <div class="row">
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="study_level">
                                                       <option value="select-option">Programme Applied for:</option>
                                                       <option value="engineering">Engineering</option>
                                                       <option value="management">Management</option>
                                                       <option value="shorttermcourse">Short Term Course</option>
                                                    </select>
                                                  </div>
                                              </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="Subject_of_Interest">
                                                            <option value="select-option">Course Level</option>
                                                            <option value="primarylevel">Primary Level</option>
                                                            <option value="threemonth">3 Month</option>
                                                            <option value="sixmonth">6 Month</option>
                                                            <option value="oneyear">1 Year</option>
                                                            <option value="twoyear">2 Years</option>
                                                            <option value="threeyeart">3 Years</option>
                                                            <option value="otherlevel">Other Level</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control" name="course_length" placeholder="select">
                                                            <option value="select-option">Course Stream </option>
                                                            <option value="primarylevel">Primary Level</option>
                                                            <option value="threemonth">3 Month</option>
                                                            <option value="sixmonth">6 Month</option>
                                                            <option value="oneyear">1 Year</option>
                                                            <option value="twoyear">2 Years</option>
                                                            <option value="threeyeart">3 Years</option>
                                                            <option value="otherlevel">Other Level</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                  <div class="col-md-12 text-center">
                                                     <button type="button" class="btn btn-default  ulockd-btn-thm2 " >Next</button>
                                                 </div>
                                            </div>
                                     </form>
                                 </div>    
                          </div>
                    </div>
                
                     <div class="card admission_card">
                          <div class="card-header">
                               <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                  Personal Details <i class="fa fa-plus-square"></i>
                               </a>
                          </div>
                           <div id="collapseOne" class="collapse" data-parent="#accordion">
                               <div class="card-body">
                                    <form class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <input type="text" class="form-control" id="exampleInputNamexa" placeholder="First Name"> 
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                              <div class="form-group">
                                                   <input type="text" class="form-control" id="exampleInputNamexb" placeholder="middle Name">
                                              </div>
                                         </div>
                                         <div class="col-md-4">
                                              <div class="form-group">
                                                   <input type="text" class="form-control" id="exampleInputNamexb" placeholder="Last Name">
                                              </div>
                                         </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <input type="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
                                              </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <input type="date"  class="form-control" id="birthday" name="birthday">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                              <div class="form-group">
                                                  <p>Please select your gender:</p>
                                                  <input type="radio" id="male" name="gender" value="male" >
                                                  <label for="male"style="margin-right:  40px;">Male</label>
                                                  <input type="radio" id="female" name="gender" value="female" >
                                                  <label for="female" style="margin-right:  40px;">Female</label>
                                                  <input type="radio" id="other" name="gender" value="other">
                                                  <label for="other"style="margin-right:  40px;">Other</label>
                                              </div>
                                           </div>   
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <input type="text"  class="form-control" id="Nationality" name="Nationality" placeholder="Nationality">
                                               </div>
                                           </div>
                                           
                                           
                                            <div class="col-md-6">
                                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        <label for =address>Full Address (Permanent)</label>
                                           <input type="text" name="Street " class="form-control"placeholder="Street Address">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                           <input type="text" name="City " class="form-control"placeholder="City">    
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                           <input type="text" name="State " class="form-control"placeholder="State">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                           <input type="text" name="State " class="form-control"placeholder="Postcode / Zip"maxlength="6">
                                      </div>
                                  </div>
                                    </div>
                                  </div>
                                    <div class="col-md-6">
                                      <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                        <label for =address>Full Address (Correspondence)</label>
                                           <input type="text" name="Street " class="form-control"placeholder="Street Address">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                           <input type="text" name="City " class="form-control"placeholder="City">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                           <input type="text" name="State " class="form-control"placeholder="State">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                           <input type="text" name="State " class="form-control"placeholder="Postcode / Zip"maxlength="6">
                                      </div>
                                  </div>
                                </div>
                              </div>
                                  <div class="col-md-1">
                                      <div class="form-group">
                                          <input name="country_code" type="text" placeholder="+91"  class="form-control ">
                                       </div>
                                   </div>
                                    <div class="col-md-5">
                                         <div class="form-group">
                                             <input name="phone" type="text" placeholder="Personal Phone Number*"  class="form-control ">
                                          </div>
                                    </div>
                                    <div class="col-md-1">
                                      <div class="form-group">
                                          <input name="country_code" type="text" placeholder="+91"  class="form-control ">
                                       </div>
                                   </div>
                                    <div class="col-md-5">
                                         <div class="form-group">
                                             <input name="phone" type="text" placeholder="Alternate Phone Number*"  class="form-control ">
                                          </div>
                                    </div>
                                  
                                    </form>
                                      <div class="col-md-12 text-center">
                                           <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                     </div>
                              </div>
                          </div>
                       </div>
                          <div class="card admission_card">
                               <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Academic Details <i class="fa fa-plus-square"></i>
                                    </a>
                               </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                         <form>
                                              <table class="table table-hover" id="participantTable">
                                                   <thead>
                                                        <tr>
                                                            <th>Degree</th>
                                                            <th>School/College</th>
                                                            <th>Exam Year</th>
                                                            <th>Grade</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                       <tr class="participantRow">
                                                            <td><input type="text" name="degree" class="form-control"></td>
                                                            <td><input name="school"  type="text"  class="form-control">
                                                            </td>
                                                            <td><input type="text" name="year" class="form-control">
                                                            </td>
                                                            <td><input type="text" name="grade" class="form-control">
                                                            </td>
                                                            <td><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                       </tr>
                                                        <tr id="addButtonRow">
                                                            <td colspan="5"><center><button class="btn btn-large btn-success add" type="button">Add</button></center></td>
                                                        </tr>
                                              </table>
                                         </form>
           
                                                            <div class="col-md-12 text-center">
                                                            <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                                          </div>
                                    </div>    
                              </div>
                       </div>
                          <div class="card admission_card">
                               <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                     Professional Experience Details <i class="fa fa-plus-square"></i>
                                  </a>
                              </div>
                              <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                         <form>
                                             <table class="table">
                                                 <thead>
                                                     <tr>
                                                          <th>Total Experience</th>
                                                          <th>Current Employer(Company name)</th>
                                                          <th>Designation</th>
                                                          <th>Location</th>
                                                     </tr>
                                                </thead>
                                                    <tr>
                                                       <td><input type="number" name="experience" min="0" max="99" class="form-control"></td>
                                                       <td><input name="school"  type="text"  class="form-control">
                                                       </td>
                                                       <td><input type="text" name="employer" class="form-control">
                                                       </td>
                                                       <td><input type="text" name="designation" class="form-control">
                                                       </td>
                                                   </tr>
                                            </table>
                                        </form>
                                                 <div class="col-md-12 text-center">
                                                       <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                                </div>
                                   </div>
                             </div>
                       </div>
    
                        <div class="card admission_card">
                             <div class="card-header">
                                   <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                          Documents <i class="fa fa-plus-square"></i>
                                   </a>
                             </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                     <div class="card-body">
                                           <form>
                                                <table class="table">
                                                       <thead>
                                                             <tr>
                                                                  <th >Photo ID Proof </th>
                                                                  <th>Last Qualification Document</th>
                                                                  <th>Address proof document</th>
                                                             </tr>
                                                       </thead>
                                                          <tr>
                                                                <td id="items"><input id="textinput" type="file" id="myFile" name="filename" class="form-control"> <div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                                <td><input type="file" id="myFile" name="filename" class="form-control"><div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                                <td><input type="file" id="myFile" name="filename" class="form-control"><div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                          </tr>
                                                        <thead>
                                                             <tr>
                                                                   <th>Experience Letter</th>
                                                                   <th>Updated CV</th>
                                                                   <th>Other</th>
                                                             </tr>
                                                       </thead>
                                                          <tr>
                                                                <td><input type="file" id="myFile" name="filename" class="form-control"><div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                                <td><input type="file" id="myFile" name="filename" class="form-control"><div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                                <td><input type="file" id="myFile" name="filename" class="form-control"><div id="add" class="btn add-more button-yellow uppercase" >+ Add another </div> <div class="delete btn button-white uppercase">- Remove</div></td>
                                                          </tr>
                                                 </table>
                                          </form>
                                               <div class="col-md-12 text-center">
                                                      <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                              </div>
                                   </div>
                            </div>
                    </div>
    
                    <div class="card admission_card">
                           <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                    Fees option <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                          <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                      <form action="/action_page.php">
                                          <p>Please select Fees option</p>
                                               <div class="row">
                                                       <div class="col-md-6"> 
                                                              <input type="radio" id="full" name="fees" value="full">
                                                              <label for="fullfees">Full Fee</label>
                                                             
                                                            <p>Scholarship option (Only available in full fee payment)</p>      
                                                     </div>
                                                       <div class="col-md-6"> 
                                                              <input type="radio" id="part" name="fees" value="part">
                                                              <label for="partfees">Part Fee</label>
                                                       </div>
                                             </div>
                                    </form>
                                              <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                             </div>
                              </div>
                       </div>
                 </div>

                  <div class="card admission_card">
                           <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                    Payment Type <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                          <div id="collapseFive" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                      <form action="/action_page.php">
                                          <p>Please select Payment Type</p>
                                               <ul  class="radio-list">
                                                  <li> 
                                                       <input type="radio" id="Online " name="payment" value="Online">
                                                       <label for="Online ">Online </label>
                                                   </li>
                                                    <li>
                                                         <input type="radio" id="Cheque " name="payment" value="Cheque ">
                                                         <label for="Cheque ">Cheque </label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" id="DD" name="payment" value="DD">
                                                         <label for="DD">DD</label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" id="Exchange_payment" name="payment" value="Exchange payment">
                                                         <label for="partfees">Exchange payment</label>
                                                   </li>
                                                   
                                               </ul>
                                             
                                    </form>
                                              <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                             </div>
                              </div>
                       </div>
                 </div>

                  <div class="card admission_card">
                           <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                    Payment Type <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                          <div id="collapseSix" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                      <form action="/action_page.php">
                                          <p>Please select Payment Type</p>
                                               <ul  class="radio-list">
                                                  <li> 
                                                       <input type="radio" id="Online " name="payment" value="Online">
                                                       <label for="Online ">Online </label>
                                                   </li>
                                                    <li>
                                                         <input type="radio" id="Cheque " name="payment" value="Cheque ">
                                                         <label for="Cheque ">Cheque </label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" id="DD" name="payment" value="DD">
                                                         <label for="DD">DD</label>
                                                   </li>
                                                   <li>
                                                         <input type="radio" id="Exchange_payment" name="payment" value="Exchange payment">
                                                         <label for="partfees">Exchange payment</label>
                                                   </li>
                                                   
                                               </ul>
                                             
                                    </form>
                                              <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                             </div>
                              </div>
                       </div>
                 </div>

                  <div class="card admission_card">
                           <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                                    Date and Place <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                          <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                      <form action="/action_p   age.php">
                                              <div class="row">
                                              <div class="col-md-6">
                                               <div class="form-group">
                                                   <label style="margin-left: 20px;">Select Date: </label>
                                              
                                                   <input type="date" class="form-control" id="date" name="date">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <label style="margin-left: 20px;">Place: </label>
                                              
                                                   <input type="text" class="form-control" id="loction" name="Location">
                                               </div>
                                           </div>
                                         </div>

                                                       
                                    </form>
                                              <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-default ulockd-btn-thm2 " >Next</button>
                                             </div>
                              </div>
                       </div>
                 </div>
                 <div class="card admission_card">
                           <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
                                    Submit details <i class="fa fa-plus-square"></i>
                                </a>
                          </div>
                          <div id="collapseEight" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                      <form action="/action_p   age.php">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label">
                                                         <input class="form-check-input" type="checkbox"> Terms & Condition
                                                        </label>
                                                  </div>
                                           

                                                       
                                    </form>
                                              <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-default ulockd-btn-thm2 " >Submit</button>
                                             </div>
                              </div>    
                       </div>
                 </div>

           </div>
      </div>
  </div>
</div>

  </section>
    <!-- footer-start -->
    <?php include 'footer.php';?>
    <!-- footer-end -->
            
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
  <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>

<script type="text/javascript">
   /* Variables */
var p = $("#participants").val();
var row = $(".participantRow");

/* Functions */
function getP(){
  p = $("#participants").val();
}

function addRow() {
  row.clone(true, true).appendTo("#participantTable");
}

function removeRow(button) {
  button.closest("tr").remove();
}
/* Doc ready */
$(".add").on('click', function () {
  getP();
  if($("#participantTable tr").length < 17) {
    addRow();
    var i = Number(p)+1;
    $("#participants").val(i);
  }
  $(this).closest("tr").appendTo("#participantTable");
  if ($("#participantTable tr").length === 3) {
    $(".remove").hide();
  } else {
    $(".remove").show();
  }
});
$(".remove").on('click', function () {
  getP();
  if($("#participantTable tr").length === 3) {
    //alert("Can't remove row.");
    $(".remove").hide();
  } else if($("#participantTable tr").length - 1 ==3) {
    $(".remove").hide();
    removeRow($(this));
    var i = Number(p)-1;
    $("#participants").val(i);
  } else {
    removeRow($(this));
    var i = Number(p)-1;
    $("#participants").val(i);
  }
});
$("#participants").change(function () {
  var i = 0;
  p = $("#participants").val();
  var rowCount = $("#participantTable tr").length - 2;
  if(p > rowCount) {
    for(i=rowCount; i<p; i+=1){
      addRow();
    }
    $("#participantTable #addButtonRow").appendTo("#participantTable");
  } else if(p < rowCount) {
  }
});

$(document).ready(function() {
  $(".delete").hide();
  //when the Add Field button is clicked
  $("#add").click(function(e) {
    $(".delete").fadeIn("1500");
     $("#items").append(
      '<input id="textinput" type="file" id="myFile" name="filename" class="form-control newinput">'
    );
  });
  $("body").on("click", ".delete", function(e) {
    $(".newinput").last().remove();
  });
});

   </script>