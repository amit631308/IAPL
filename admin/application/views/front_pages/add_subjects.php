  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course related subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Course(<?=$course_data[0]->course_code;?>): <?=$course_data[0]->course_name;?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                <form id="course-related-subject-form" action="" method="post">
                <button type="button" class="btn btn btn-block btn-success" id="add-subject" data-course_code="<?=$course_data[0]->course_code;?>">Click to add more subject fields</button>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>S.Grade No.</th>
                    <th>S.sem/term</th>
                    <th>Course Code</th>
                    <th>S.Type</th>
                    <th>Remove</th>
                  </tr>
                  </thead>
                  <tbody id="wrapper">
                        <tr>
                          <td>
                            <input type="text" name="subject_code[]" class="form-control">
                            <input type="hidden" name="course_code" value="<?=$course_data[0]->course_code;?>" class="form-control">
                            <input type="hidden" name="course_id" value="<?=$course_data[0]->id;?>" class="form-control">
                          </td>
                          <td><input type="text" name="subject_name[]" class="form-control"></td>
                          <td><input type="number" name="subject_grade[]" class="form-control"></td>
                          <td><input type="text" name="subject_semester[]" class="form-control"></td>
                          <td><input type="text" name="course_code[]" value="<?=$course_data[0]->course_code;?>" class="form-control" disabled></td>
                          <td><select class="form-control select2" name="subject_type[]" style="width: 100%;">
                                      <option value="0" selected="selected">Main</option>
                                      <option value="1">Elective</option>
                                  </select></td>
                          <td><button type="button" class="btn btn btn-block btn-danger" disabled>Remove</button></td>
                        </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td><button type="submit" class="btn btn-success float-right">Submit</button></td>
                    </tr>
                  </tfoot>
                </table>
                </form>
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
  