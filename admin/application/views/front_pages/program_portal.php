  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Career Section</h1>
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
              <a href="<?=base_url()?>Programs/create_new_program/" class="btn btn-success float-right">Add New Program</a>
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
                <h3 class="card-title">All Programs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Edit</th>
                    <th>No.</th>
                    <th>C.Code</th>
                    <th>Course Type</th>
                    <th>Course Level</th>
                    <th>Course Name</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($course_data)){
                      $no = 1;
                      foreach($course_data as $key => $value){ ?>
                      
                      <tr>
                        <th>
                          <div class="btn-group btn-group-sm">
                            <a href="<?=base_url('Programs/view_program_detail/'.$value['course_code']);?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                            <a href="<?=base_url('Programs/create_new_program/'.$value['course_code']);?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                          </div>
                        </th>
                        <th><?=$no; $no++;?></th>
                        <th><?=$value['course_code'];?></th>
                        <th><?=$value['course_type_name'];?></th>
                        <th><?=$value['course_level_name'];?></th>
                        <th><?=$value['course_name'];?></th>
                      </tr>
                    <?php } // end foreach
                    }else{ echo 'No data available!'; } // end if ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Edit</th>
                    <th>No.</th>
                    <th>C.Code</th>
                    <th>Course Type</th>
                    <th>Course Level</th>
                    <th>Course Name</th>
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
