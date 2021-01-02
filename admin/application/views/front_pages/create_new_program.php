  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Create New Course</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><?php echo (@$course_data[0]['course_name'] != '' ? 'Edit course data' : 'New Course Form');?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form id="program-form-data" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="alert alert-success print-success-msg" style="display:none;width: 100%;"></div>
                    <div class="alert alert-danger print-error-msg" style="display:none;width: 100%;"></div>                             
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course Type</label>                            
                            <select class="form-control select2" name="course_type" id="course_type" style="width: 100%;">
                                <?php
                                if(@$course_data[0]['course_name'] != ''){
                                  foreach($course_types as $key => $values){ ?>
                                    <option value="<?=$values->course_type_id?>" <?php echo ($values->course_type_name == @$course_data[0]['course_type_name'] ? 'selected' : $values->course_type_name)?>><?=$values->course_type_name?></option>
                                    <?php 
                                    } // end foreach  
                                }else{
                                foreach($course_types as $key => $values){ ?>
                                <option value="<?=$values->course_type_id?>" <?php echo ($values->course_type_name == 'Engineering' ? 'selected' : $values->course_type_name)?>><?=$values->course_type_name?></option>
                                <?php 
                                } // end foreach
                                } // end if else ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="course_code">Course Code</label>
                            <input type="text" id="course_code" value="<?=@$course_data[0]['course_code'];?>" name="course_code" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="	course_eligibility">Course Eligibility</label>
                            <input type="text" id="course_eligibility"value="<?=@$course_data[0]['course_eligibility'];?>" name="course_eligibility" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="course_duration">Course Duration</label>
                            <input type="text" id="course_duration"value="<?=@$course_data[0]['course_duration'];?>" name="course_duration" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="total_number_of_tearm_or_semester">Total Number of Term or Semester</label>
                            <input type="text" id="total_number_of_tearm_or_semester" value="<?=@$course_data[0]['total_number_of_tearm_or_semester'];?>"name="total_number_of_tearm_or_semester" class="form-control">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course Level</label>
                            <select class="form-control select2" name="course_level" id="course_level" style="width: 100%;">                                
                                <?php
                                if(@$course_data[0]['course_level'] != ''){
                                  foreach($course_levels as $key => $values){ ?>
                                  <option value="<?=$values->course_level_id?>" <?php echo ($values->course_level_name == @$course_data[0]['course_level_name'] ? 'selected' : $values->course_level_name)?>><?=$values->course_level_name?></option>
                                  <?php } // end foreach
                                }else{
                                  foreach($course_levels as $key => $values){ ?>
                                  <option value="<?=$values->course_level_id?>" <?php echo ($values->course_level_name == 'Diploma' ? 'selected' : $values->course_level_name)?>><?=$values->course_level_name?></option>
                                  <?php } // end foreach
                                    } // end condition
                                  ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="course_name">Course Name</label>
                            <input type="text" id="course_name"value="<?=@$course_data[0]['course_name'];?>" name="course_name" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="accelerated_mode">Accelerated Mode</label>
                            <input type="text" id="accelerated_mode"value="<?=@$course_data[0]['accelerated_mode'];?>" name="accelerated_mode" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="semester_tearm">Semester or Term</label>
                            <select class="form-control select2" name="semester_tearm" id="semester_tearm" style="width: 100%;">
                                <?php
                                if(@$course_data[0]['course_behaviour'] != ''){
                                  foreach($heysushil_course_behaviour as $key => $values){ ?>
                                    <option value="<?=$values->course_id?>" <?php echo ($values->course_behaviour == @$course_data[0]['course_behaviour'] ? 'selected' : $values->course_behaviour)?>><?=$values->course_behaviour?></option>
                                    <?php 
                                      } // end foreach
                                }else{
                                  foreach($heysushil_course_behaviour as $key => $values){ ?>
                                  <option value="<?=$values->course_id?>" <?php echo ($values->course_behaviour == 'Term' ? 'selected' : $values->course_behaviour)?>><?=$values->course_behaviour?></option>
                                  <?php 
                                    } // end foreach
                                    } // end condtion ?>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label for="exampleInputFile">Course Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>                                
                            </div>
                            <?php if(@$course_data[0]['image'] != ''){?>
                              <img src="../../../assets/uploads/course_banners/<?=@$course_data[0]['image'];?>" alt="aaa" height="50">
                            <?php } ?>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                Career Option
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                <textarea class="textarea" placeholder="Place some text here" id="career_option" name="career_option"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=@$course_data[0]['career_option'];?></textarea>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <button type="submit" class="btn btn-success float-right"><?php echo (@$course_data[0]['course_code'] != '' ? 'Update program data' : 'Create new program');?></button>
                </div>
                <!-- /.row -->
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->