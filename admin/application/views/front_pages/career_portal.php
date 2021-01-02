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
            <div class="card-header">
              <h3 class="card-title">Create New Job</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputStatus">Job Type</label>
                <select class="form-control custom-select" id="job_opening_type" name="job_opening_type">
                  <option selected disabled>Select one</option>
                  <option value="Fresher">Fresher</option>
                  <option value="Experienced">Experienced</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Job Title</label>
                <input type="text" id="job_title" name="job_title" class="form-control">
              </div>
              <div class="form-group">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      General Information
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
                      <textarea class="textarea" placeholder="Place some text here" id="general_information" name="general_information"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Industry Type</label>
                <input type="text" id="industry_type" name="industry_type" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Function Area</label>
                <input type="text" id="function_area" name="function_area" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Employment Type</label>
                <input type="text" id="employment_type" name="employment_type" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Preferred Education</label>
                <input type="text" id="preferred_education" name="preferred_education" class="form-control">
              </div>
              <div class="form-group">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      Competencies
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
                      <textarea class="textarea" placeholder="Place some text here" id="competencies" name="competencies"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      Job Duties
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
                      <textarea class="textarea" placeholder="Place some text here" id="job_duties" name="job_duties"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Date:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
              <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Created Jobs Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
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
