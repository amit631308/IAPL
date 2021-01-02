  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Intructor Section</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Career Section</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <!-- <button type="button" class="btn btn-block btn-success">Success</button> -->
              <!-- <a href="#" class="btn btn-success float-right">Add New Instructor</a> -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Instructor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Edit</th>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course </th>
                    <th>Experience</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($instructors)){
                      $no = 1;
                      foreach($instructors as $key => $value){ ?>
                      
                      <tr>
                        <th>
                        <div class="btn-group btn-group-sm">
                            <a href="#edit-instructor-data-modal<?=$value['id'];?>" class="btn btn-primary " data-toggle="modal" data-target="#edit-instructor-data-modal<?=$value['id'];?>"
                            
                           ><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?=base_url();?>instructor/delete_instructor/<?=$value['id'];?>" class="btn btn-danger " ><i class="fas fa-trash"></i></a>
                          </div>
                        </th>
                        <th><?=$no; $no++;?></th>
                        <th><?=$value['name'];?></th>
                        <th><?=$value['email'];?></th>
                        <th><?=$value['offered_course'];?></th>
                        <th><?=$value['experienced'];?></th>
                        <?php if ($value['status'] == 1){
                          $status = "Active";
                          $col = "text-primary";
                        }else{
                          $status = "Deactive";
                          $col = "text-danger";
                        }?>
                        <th class="<?=$col;?>"><?= $status?></th>
                      </tr>

                           <!-- show this modal on view_program_deail on edit button click -->
  <!-- ---------------------------------------------------------------------------->
<!-- Single intructor edit form modal -->
<div class="modal fade" id="edit-instructor-data-modal<?=$value['id'];?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Instructor</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form action="<?=base_url();?>instructor/edit_instructor" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input  value="<?=$value['name'];?>" type="text" name="name" class="form-control">
                          
                          <input value="<?=$value['id'];?>" type="hidden" name="id">
                      </div>
                      <div class="form-group">
                          <label for="subject_grade">Phone Number</label>
                          <input value="<?=$value['phone'];?>" type="text" name="phone" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="subject_semester">Email</label>
                          <input value="<?=$value['email'];?>" type="text" name="email" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="subject_type">Previously Teached Subject</label>
                          <?php
                          if ($value['prev_teaching'] != ''){
                            $selected = "selected";
                          }else
                          {
                            $selected = '';
                          }
                          ?>
                          <select  class="form-control select2" name="prev_teaching" style="width: 100%;">
                              <option >Informal</option>
                              <option >Professional</option>
                              <option >Online</option>
                              <option selected="<?=$selected;?>"><?=$value['prev_teaching'];?></option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="subject_name">Course</label>
                          <input value="<?=$value['offered_course'];?>" type="text" name="offered_course" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="subject_name">contribute to the administration</label>
                          <input value="<?=$value['contrib_to_administration'];?>" type="text" name="contrib_to_administration" class="form-control">
                      </div>
  
                      
                    <div class="form-group">
                      <label for="subject_name">Kind Of Institution</label>
                      <input value="<?=$value['kind_of_institution'];?>" type="text" name="kind_of_institution" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="subject_name">Philosophy</label>
                    <input value="<?=$value['philosophy'];?>" type="text" name="philosophy" class="form-control">
                </div>
                <div class="form-group">
                  <label for="subject_name">Professional Goal</label>
                  <input value="<?=$value['professional_goals'];?>" type="text" name="professional_goals" class="form-control">
              </div>
                  </div>
                <div class="col-md-6">
  
                  <div class="form-group">
                    <label for="subject_type">Expireance</label>
                   
                    <select class="form-control select2" name="experienced" style="width: 100%;">
                        <option >I am a beginner</option>
                        <option > I have some knowledge </option>
                        <option > I am experienced</option>
                        <option > I have videos ready to upload</option>
                        <option selected="<?=$selected;?>"><?=$value['experienced'];?></option>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="subject_type">Status</label>
                      <?php
                      if($value['status'] == 1){
                      $st = "Active";
                      $val = 1;
                      }
                      else
                      {
                      $st = "Deactive";
                      $val = 0;
                      }
                      ?>
                      <select class="form-control select2" name="status" style="width: 100%;">
                          <option value="1">Active</option>
                          <option value="0">Deactive</option>
                          <option value="<?=$val;?>" selected="<?=$selected;?>"><?=$st;?></option>
                          
                      </select>
                  </div>
              </div>
                 
              </div>
              <input type="submit" class="btn btn btn-block btn-success edit-subject-data-related-to-course" value="Submit" name="edit-subject-button">
              <!-- class="edit-subject-data-related-to-course" -->
          </form>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!--------------------------------------------------------------------------                                 
   end edit_intructor-data modal -->

                    <?php } // end foreach
                    }else{ echo 'No data available!'; } // end if ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Edit</th>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course </th>
                    <th>Experience</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>













