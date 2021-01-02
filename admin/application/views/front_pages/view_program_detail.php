  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Career Section</h1> -->
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
          <!-- <div class="callout callout-info">
            <p><strong><i class="fas fa-info"></i> Note:</strong>This page has been enhanced for printing.</p>
          </div> -->
          <div class="card card-primary">
            <div class="card-body">
              <h4>Course details: </h4>
              <div class="row">
                <div class="col-md-6">
                  <p><b>Course code: </b><?=$course_data[0]['course_code'];?></p>
                  <p><b>Course Type: </b><?=$course_data[0]['course_type_name'];?></p>
                </div>
                <div class="col-md-6">
                  <p><b>Course Level: </b><?=$course_data[0]['course_level_name'];?></p>
                  <p><b>Total Subjects: </b><?=count($total_subjects_no);?></p>
                </div>
                <div class="col-md-12">
                  <p><b>Course Name: </b><?=$course_data[0]['course_name'];?></p>
                </div>
              </div>
              <!-- <button type="button" class="btn btn-block btn-success">Success</button> -->
              <!-- <a href="<?=base_url()?>Programs/create_new_program/" class="btn btn-success float-right">Add New Program</a> -->
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
                <h3 class="card-title">All Program related subjects</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Edit</th>
                    <th>No.</th>
                    <th>S.Code</th>
                    <th>Grade</th>
                    <th>Sem.</th>
                    <th>Type</th>
                    <th>Subject Name</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($all_subjects)){
                      $no = 1;
                      // echo '<pre>';print_r($all_subjects);
                      foreach($all_subjects as $key => $value){ ?>
                      
                      <tr>
                        <td>
                          <div class="btn-group btn-group-sm">
                            <a href="#edit-subject-data-modal" class="btn btn-primary get-edit-subject-data" data-toggle="modal" data-target="#edit-subject-data-modal"
                            data-no="<?=$no;?>"
                            data-course_code="<?=$course_data[0]['course_code'];?>"
                            data-id="<?=$value['id'];?>"
                            data-subject_code="<?=$value['subject_code'];?>"
                            data-subject_grade="<?=$value['subject_grade'];?>"
                            data-subject_semester="<?=$value['subject_semester'];?>"
                            data-subject_type="<?=($value['subject_type'] == 0 ? 'Main' : 'Elective');?>"
                            data-subject_name="<?=$value['subject_name'];?>"                            
                            ><i class="fas fa-pencil-alt"></i></a>
                            <a href="#delete-subject" class="btn btn-danger delete-subject-function" data-id="<?=$value['id'];?>" data-course_code="<?=$course_data[0]['course_code'];?>"><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                        <td><?=$no; $no++;?></td>
                        <td><?=$value['subject_code'];?></td>
                        <td><?=$value['subject_grade'];?></td>
                        <td><?=$value['subject_semester'];?></td>
                        <td><?=($value['subject_type'] == 0 ? 'Main' : 'Elective');?></td>
                        <td><?=$value['subject_name'];?></td>
                      </tr>
                    <?php } // end foreach
                    }else{ echo 'No data available!'; } // end if ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Edit</th>
                    <th>No.</th>
                    <th>S.Code</th>
                    <th>Grade</th>
                    <th>Behav.</th>
                    <th>Type</th>
                    <th>Subject Name</th>
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
  <!-- /.content-wrapper -->
