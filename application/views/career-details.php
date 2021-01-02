<style type="text/css">
  .tabcontent2 .table {
    width: 50%;
    margin-top: 5%;
    border: none;
  }

  .tabcontent2 .table th,
  td {
    border: none !important;
  }
</style>
<?php //echo '<pre>'; print_r($single_career); ?>
<!-- page-heading -->
<section class="career-area">
  <div class="ulockd-inner-home">
    <div class="container text-center">
      <div class="row">
        <div class="inner-conraimer-details">
          <div class="col-md-12">
            <h1 class="text-uppercase">CAREER</h1>
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
              <li> <a href="career.php"> CAREER </a> </li>
              <li><a href="#"> || </a></li>
              <li> <a href="#"><?=$single_career[0]['job_title']?></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- page-heading-end -->
<!-- Career section  -->
<section class="career-section-details">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="tabcontent2">
          <h2> Current Opening</h2>
          <h3><?=$single_career[0]['job_title']?></h3>
          <?=$single_career[0]['general_information']?>
          <table class="table">
            <tbody>
              <tr>
                <th>Industry Type</th>
                <td><?=$single_career[0]['industry_type']?></td>
              </tr>
              <tr>
                <th>Function Area</th>
                <td><?=$single_career[0]['function_area']?></td>
              </tr>
              <tr>
                <th>Employment Type</th>
                <td><?=$single_career[0]['employment_type']?></td>
              </tr>
              <tr>
                <th>Education </th>
                <td><?=$single_career[0]['preferred_education']?></td>

              </tr>
            </tbody>
          </table>
          <h4><?=$single_career[0]['job_title']?> Competencies:</h4>
          <?=$single_career[0]['competencies']?>
          <h4>Job Duties:</h4>
          <?=$single_career[0]['job_duties']?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="tabcontent2">

          <div class="form-wrapper" id="fcontact-form">
            <div class="enquiry-title">Apply Now</div>
            <div id="fsuccessmsg"></div>

            <form name="fcontactform" id="fcontactform" autocomplete="off" class="form" method="post" action="enquiries/career" enctype="multipart/form-data">
              <input name="enquiry_for" type="hidden" value="Enquiry For Career With Us">
              <input type="hidden" name="page_url" value="">
              <div class="form-group">
                <input type="text" name="name" id="fullname" class="form-input" placeholder="Full Name" required="">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-input" placeholder="Email Id" required="">
              </div>
              <div class="form-group">
                <input type="text" name="phone" id="mob" class="form-input" minlength="10" maxlength="15" placeholder="Mobile Number" required="">
              </div>
              <div class="form-group">
                <input type="text" name="address" id="experience" class="form-input" placeholder="Total Experience">
              </div>
              <div class="form-group">
                <input type="text" name="positionapplied" id="positionappliedfor" class="form-input" autocomplete="off" placeholder="Position Applied For">
              </div>
              <div class="form-group">
                <p class="resume-upload text-white">Upload Resume</p>
                <input type="file" name="resume" id="resume" class="form-input" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" placeholder="Upload Resume">
                <p class="resume-format text-white"> Format txt, pdf, ppt, pptx, doc or docx </p>
                <p id="ferrormsg"></p>
              </div>

              <div class="form-group">
                <button type="submit" class="btn skip ">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>