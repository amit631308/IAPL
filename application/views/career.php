
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

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="career-section-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center pt-5">
          <div class="title title-2">
            <h2>Hold your breath....<br>
              <span>we're just warming up</span>
            </h2>
          </div>
        </div>    
        <div class="col-lg-6">
          <div class="tabcontent2">
            <div class="title-sec">
              <img src="<?= base_url(); ?>assets/images/Career_fresher.jpg">
              <div class="overlay-title">
                <h1>Fresher</h1>
              </div>
            </div>
            <div class="position-section">
              <img src="<?= base_url(); ?>assets/images/position.png">
              <div class="position-detail">
                <?=$career_result[0]['fresher_count'] > 9 ? $career_result[0]['fresher_count'] : '0 '.$career_result[0]['fresher_count']; ?>
              </div>
              <img src="<?= base_url(); ?>assets/images/outline.png" class="outline">
              <h3> Open Position </h3>
            </div>
            <?php
              if(@$career_result){
                foreach($career_result as $key => $value){
                  if($value['job_opening_type'] == 'Fresher'){
                  // echo '<pre>';print_r($value);
            ?>
            <div id="accordion<?=$value['id'];?>">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#heysushil_fresher<?=$value['id'];?>">
                    <?=$value['job_title'];?> <i class="fa fa-angle-double-down"></i>
                  </a>
                </div>
                <div id="heysushil_fresher<?=$value['id'];?>" class="collapse " data-parent="#accordion<?=$value['id'];?>">
                  <div class="card-body">
                    <?=$value['general_information']?>
                    <br>
                    <a href="<?=base_url();?>career-details/<?=random_string('sha1', 40).$value['id']?>"><button class="btn btn-default ulockd-btn-thm2">View Detials</button></a>

                  </div>
                </div>
              </div>

            </div>
            <?php
                  } // if colse
                } // foreach close
              } // if colse
            ?>

          </div>
        </div>
        <div class="col-lg-6">

          <div class="tabcontent2">

            <div class="title-sec">
              <img src="<?= base_url(); ?>assets/images/career_exp.png">
              <div class="overlay-title">
                <h1>Experienced</h1>
              </div>
            </div>
            <div class="position-section">
              <img src="<?= base_url(); ?>assets/images/position.png">
              <div class="position-detail">
              <?=$career_result[0]['experience_count'] > 9 ? $career_result[0]['experience_count'] : '0 '.$career_result[0]['experience_count']; ?>
              </div>
              <img src="<?= base_url(); ?>assets/images/outline.png" class="outline">
              <h3> Open Position </h3>
            </div>
            <?php
              if(@$career_result){
                foreach($career_result as $key => $value){
                  if($value['job_opening_type'] == 'Experienced'){
                  // echo '<pre>';print_r($value);
            ?>
            <div id="Experienced<?=$value['id'];?>">
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#heysushil_Experienced<?=$value['id'];?>">
                    <?=$value['job_title'];?> <i class="fa fa-angle-double-down"></i>
                  </a>
                </div>
                <div id="heysushil_Experienced<?=$value['id'];?>" class="collapse " data-parent="#Experienced<?=$value['id'];?>">
                  <div class="card-body">
                    <?=$value['general_information']?>
                    <br>
                    <a href="<?=base_url();?>career-details/<?=random_string('sha1', 40).$value['id']?>"><button class="btn btn-default ulockd-btn-thm2">View Detials</button></a>

                  </div>
                </div>
              </div>

            </div>
            <?php
                  } // if colse
                } // foreach close
              } // if colse
            ?>

          </div>
        </div>

        <div class="title title-2">
          <h2>Apply <span> Now</span></h2>
          
        </div>
        <div class="col-lg-8 offset-lg-2">
        
          <div class="tabcontent-form">

            <div class="form-wrapper" id="fcontact-form">
              <div class="enquiry-title">Apply Now</div>
              <div id="fsuccessmsg"></div>

              <form action="<?=base_url();?>welcome/career_apply_mail/" autocomplete="off" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="alert alert-success print-success-msg" style="width: 100%;display:none;"></div>
                    <div class="alert alert-danger print-error-msg" style="width: 100%;display:none;"></div>
                </div>
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-input" placeholder="Full Name" required="">
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-input" placeholder="Email Id" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" id="phone" class="form-input" minlength="10" maxlength="15" placeholder="Mobile Number" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="address" id="address" class="form-input" placeholder="Total Experience" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="positionapplied" id="positionapplied" class="form-input" autocomplete="off" placeholder="Position Applied For" required="">
                </div>
                <div class="form-group">
                  <p class="resume-upload text-white">Upload Resume</p>
                  <input type="file" name="resume" id="resume" class="form-input" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" placeholder="Upload Resume" required="">
                  <p class="resume-format text-white"> Format txt, pdf, ppt, pptx, doc or docx </p>
                  <p id="ferrormsg"></p>
                </div>

                <div class="form-group">
                  <!-- <button type="submit" class="btn skip ">Submit</button> -->
                  <input type="submit" class="btn skip " value="Submit" name="Submit">
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>


  </section>