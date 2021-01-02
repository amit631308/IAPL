  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo '2020 - '.date('Y'); ?> <a href="http://development.technokrits.com">Technokrits</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="<?php echo base_url(); ?>plugins/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- ChartJS -->
<!-- <script src="<?php echo base_url(); ?>plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="<?php echo base_url(); ?>plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="<?php echo base_url(); ?>plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?php echo base_url(); ?>plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="<?php echo base_url(); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="<?php echo base_url(); ?>plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="<?php echo base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url(); ?>dist/js/adminlte.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url(); ?>dist/js/demo.js"></script> -->
<!-- Other related css -->

<script>var base_url = '<?php echo base_url();?>';</script>
<?php 
    if(@$js){
      // print_r($css);die;
      foreach ($js as $link) {
        echo '<script src="'. base_url() . @$link . '"></script>';
      }      
    }
?>
<script src="<?php echo base_url();?>plugins/heysushil/formdata.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>plugins/toastr/toastr.min.js"></script>
<link href="<?php echo base_url(); ?>plugins/toastr/toastr.min.css" rel="stylesheet">

<script type="text/javascript">
  <?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>

<!-- page script for tables -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

<script type="text/javascript">
  $(document).ready(function () {

    // allowed maximum input fields
    var max_input = 20;

    // initialize the counter for textbox
    var x = 1;

    // handle click event on Add More button
    $('#add-subject').click(function (e) {
      e.preventDefault();
      var course_code = $(this).attr('data-course_code');
      if (x < max_input) { // validate the condition
        x++; // increment the counter
        $('#wrapper').append(`
          <tr id="row`+x+`">
            <td><input type="text" name="subject_code[]" class="form-control"></td>
            <td><input type="text" name="subject_name[]" class="form-control"></td>
            <td><input type="text" name="subject_grade[]" class="form-control"></td>
            <td><input type="text" name="subject_semester[]" class="form-control"></td>
            <td><input type="text" name="course_code[]" value="`+course_code+`" class="form-control" disabled></td>
            <td><select class="form-control select2" name="subject_type[]" style="width: 100%;">
                        <option value="0" selected="selected">Main</option>
                        <option value="1">Elective</option>
                    </select></td>
            <td><button type="button" id="`+x+`" class="btn btn btn-block btn-danger btn_remove_subject">Remove</button></td>
          </tr>
        `); // add input field
      }
    });

    $(document).on('click','.btn_remove_subject', function(){
        var button_id = $(this).attr("id");
        $("#row"+button_id+"").remove();
    });

    // handle click event of the remove link
    // $('.wrapper').on("click", ".remove-lnk", function (e) {
    //   e.preventDefault();
    //   $(this).parent('table').remove();  // remove input field
    //   x--; // decrement the counter
    // })

  });
</script>
</body>
</html>
