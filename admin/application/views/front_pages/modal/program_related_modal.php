<!--------------------------------------------------------------------------                                    Left slide Introduction about this page
This page contains a popup modal which shows on many sections in project
Following Popups are using as followes

1. edit-subject-data: on singel course all subjects click on single subject on edit mode to open modal


---------------------------------------------------------------------------->


<!--------------------------------------------------------------------------                                    
show this modal on view_program_deail on edit button click
---------------------------------------------------------------------------->
<!-- Single subject edit form modal -->
<div class="modal fade" id="edit-subject-data-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <div class="modal-body">
        <form action="<?=base_url();?>Programs/get_edit_subject_data/" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject_code">Subject Code</label>
                        <input type="text" name="subject_code" class="form-control">
                        <input type="hidden" name="course_code">
                        <input type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="subject_grade">Subject Grade</label>
                        <input type="text" name="subject_grade" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject_semester">Subject Semester</label>
                        <input type="text" name="subject_semester" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject_type">Subject Type</label>
                        <select class="form-control select2" name="subject_type" style="width: 100%;">
                            <option value="subject_type_no"><p id="subject_type"></p></option>
                            <option value="other_subject_type_no"></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="subject_name">Subject Name</label>
                        <input type="text" name="subject_name" class="form-control">
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
end edit_subject-data modal
---------------------------------------------------------------------------->


<!--------------------------------------------------------------------------                                    Left slide Modal for showing full year fee report
---------------------------------------------------------------------------->

<div class="modal left-slide-modal fade" id="full-year-fee-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong class="text-success" id="feeMonthstudentName"></strong> - Full Year Fee Report
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-header">
                <span id="feeMonthdepositeMonthFee"></span>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-medium text-dark-medium text-center">Month</th>
                                <th class="font-medium text-dark-medium text-center">Fee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-5 pt-2">Total Vehical Fee</td>
                                <td class="pl-5 pt-2" id="vehicalFees"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Jan</td>
                                <td class="pl-5 pt-2" id="feeMonthJan"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Feb</td>
                                <td class="pl-5 pt-2" id="feeMonthFeb"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Mar</td>
                                <td class="pl-5 pt-2" id="feeMonthMar"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Apr</td>
                                <td class="pl-5 pt-2" id="feeMonthApr"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">May</td>
                                <td class="pl-5 pt-2" id="feeMonthMay"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Jun</td>
                                <td class="pl-5 pt-2" id="feeMonthJun"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Jul</td>
                                <td class="pl-5 pt-2" id="feeMonthJul"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Aug</td>
                                <td class="pl-5 pt-2" id="feeMonthAug"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Sep</td>
                                <td class="pl-5 pt-2" id="feeMonthSep"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Oct</td>
                                <td class="pl-5 pt-2" id="feeMonthOct"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Nov</td>
                                <td class="pl-5 pt-2" id="feeMonthNov"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Dec</td>
                                <td class="pl-5 pt-2" id="feeMonthDec"></td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-warning">
                            <tr>
                                <th class="font-medium text-dark-medium text-center">Total
                                    Yearly Fee: <b id="totalFee" class="text-primary"></b></th>
                                <th class="font-medium text-dark-medium text-center">Remaning
                                    Yearly Fee: <b id="remaningFee" class="text-danger"></b>
                                </th>
                            </tr>
                        </tfoot>
                        <tfoot class="thead-dark">
                            <tr class="pt-5">
                                <th class="pl-5">Total</th>
                                <th class="pl-5" id="totalFeeSum"></th>
                            </tr>
                            <tr>
                                <td>Note: Fees must be deposited by the 10th day of every month.
                                </td>
                                <td>Sig. of incharge</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="footer-btn bg-dark-low" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------                                END Left slide Modal for showing full year fee report
---------------------------------------------------------------------------->


<!--------------------------------------------------------------------------                                        Left slide Modal for showing montly fee report
                IT'S CENTER MODAL BUT NOR WORKING FOR KNOW
---------------------------------------------------------------------------->
<div class="modal left-slide-modal fade" id="get-student-fee-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong class="text-success" id="oneMonthstudentName"></strong> - <strong class="text-primary" id="oneMonthmonth"></strong> - Month's Fee Report
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-medium text-dark-medium text-center">
                                    PARTICULARS</th>
                                <th class="font-medium text-dark-medium text-center">Rs.
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-5 pt-2">Tuition Fee</td>
                                <td class="pl-5 pt-2" id="oneMonthtuitionFee"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Computer Fee</td>
                                <td class="pl-5 pt-2" id="oneMonthcomputerFee"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Late Fee</td>
                                <td class="pl-5 pt-2" id="oneMonthlateFee"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Arrears Fee</td>
                                <td class="pl-5 pt-2" id="oneMontharrears"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Vehical Fee</td>
                                <td class="pl-5 pt-2" id="oneMonthvehicalFee"></td>
                            </tr>
                            <tr>
                                <td class="pl-5 pt-2">Other Charges</td>
                                <td class="pl-5 pt-2" id="oneMonthotherCharges"></td>
                            </tr>
                        </tbody>
                        <tfoot class="thead-dark">
                            <tr class="pt-5">
                                <th class="pl-5">Total</th>
                                <th class="pl-5" id="oneMonthmonthTotalFee"></th>
                            </tr>
                            <tr>
                                <td>Note: Fees must be deposited by the 10th day of every
                                    month.</td>
                                <td>Sig. of incharge</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="footer-btn bg-dark-low" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------                                        END Left slide Modal for showing montly fee report
---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------                        ACCOUNT SECTION SINGLE PROFILE OF STUDENT MODAL START ON ACCOUNT SECTION
---------------------------------------------------------------------------->
<div class="modal left-slide-modal fade" id="account-single-student-profile-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <span id="studentImageAccountProfile"></span>
                        </div>
                        <div class="col-md-8">
                            <h5 class="modal-title text-center">Session - (<strong class="text-primary" id="sessionYearAccountProfile"></strong>)</h5>
                            <h5 class="modal-title">Name - <strong class="text-success" id="studentNameAccountProfile"></strong></h5>
                            <h5 class="modal-title">Class - <strong class="text-success" id="classAccountProfile"></strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-medium text-dark-medium text-center">
                                    Fields</th>
                                <th class="font-medium text-dark-medium text-center">Details
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong class="text-dark text-bold">Roll Number</strong></td>
                                <td><strong class="text-primary" id="rollNoAccountProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Admission Number</strong></td>
                                <td><strong class="text-primary" id="admissionNoAccountProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Name</strong></td>
                                <td><strong class="text-primary" id="fatherNameAccountProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Mobile</strong></td>
                                <td><strong class="text-primary" id="fathersMobileAccountProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Image</strong></td>
                                <td><span id="parentImageAccountProfile"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="footer-btn bg-dark-low" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------                        
END END END ACCOUNT SECTION SINGLE PROFILE OF STUDENT MODAL END
---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------                        
PROFILE OF STUDENT MODAL START ON STUDENT SECTION ON PROJECT
---------------------------------------------------------------------------->
<div class="modal left-slide-modal fade" id="single-student-profile-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <span id="studentImageStudentProfile"></span>
                        </div>
                        <div class="col-md-8">
                            <h5 class="modal-title text-center">Session - (<strong class="text-primary" id="sessionYearStudentProfile"></strong>)</h5>
                            <h5 class="modal-title">Name - <strong class="text-success" id="studentNameStudentProfile"></strong></h5>
                            <h5 class="modal-title">Class - <strong class="text-success" id="classStudentProfile"></strong></h5>
                            <h5 class="modal-title">Blod Group - <strong class="text-success" id="bloodGroupStudentProfile"></strong></h5>
                            <h5 class="modal-title">Category - <strong class="text-success" id="studentCategoryStudentProfile"></strong></h5>
                            <h5 class="modal-title">Religion - <strong class="text-success" id="religionStudentProfile"></strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th class="font-medium text-dark-medium text-center">
                                    Fields</th>
                                <th class="font-medium text-dark-medium text-center">Details
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong class="text-dark text-bold">Roll Number</strong></td>
                                <td><strong class="text-primary" id="rollNoStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Admission Number</strong></td>
                                <td><strong class="text-primary" id="admissionNoStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Name</strong></td>
                                <td><strong class="text-primary" id="fatherNameStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Mobile</strong></td>
                                <td><strong class="text-primary" id="fathersMobileStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Occupation</strong></td>
                                <td><strong class="text-primary" id="occupationFatherStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Occupation</strong></td>
                                <td><strong class="text-primary" id="occupationMotherStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Address</strong></td>
                                <td><strong class="text-primary" id="residentialAddressStudentProfile"></strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-dark text-bold">Father's Image</strong></td>
                                <td><span id="parentImageStudentProfile"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="footer-btn bg-dark-low" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------                        
END END END SINGLE PROFILE OF STUDENT MODAL END ON STUDNET SECTION ON PORJECT
---------------------------------------------------------------------------->


 