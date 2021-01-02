$('#enquiry-form').submit(function(e){
    e.preventDefault(); 
     $.ajax({
         url: base_url + 'welcome/enquiry_form/',
         type:"post",
         dataType: 'json',
         data:new FormData(this),
         processData:false,
         contentType:false,
         cache:false,
         async:false,
        success: function(data){
            // alert(data.success);
            console.log(data);
            if($.isEmptyObject(data.error)){
                $(".print-error-msg").css('display','none');
                $('.print-success-msg').css('display','block');
                window.location.href = base_url+data.redirect;
            }else{
                $(".print-error-msg").css('display','block');
                $(".print-error-msg").html(data.error);
            }
        }
     });
});

/*------------------------------------------------------------------------------------------------
										START STUDENT SECTION
-------------------------------------------------------------------------------------------------*/

//---------ON LIST OF ALL STUDENTS SHOW STUDENTS PROFILE INFO---------

$('.single-student-profile').on('click', function () {
    var studentName = $(this).attr('data-studentName');
    var fatherName = $(this).attr('data-fatherName');
    var rollNo = $(this).attr('data-rollNo');
    var sessionYear = $(this).attr('data-sessionYear');
    var className = $(this).attr('data-class');
    var fathersMobile = $(this).attr('data-fathersMobile');
    var studentImage = $(this).attr('data-studentImage');
    var parentImage = $(this).attr('data-parentImage');
    var stuId = $(this).attr('data-stuId');
    var bloodGroup = $(this).attr('data-bloodGroup');
    var studentCategory = $(this).attr('data-studentCategory');
    var religion = $(this).attr('data-religion');
    var occupationFather = $(this).attr('data-occupationFather');
    var occupationMother = $(this).attr('data-occupationMother');
    var residentialAddress = $(this).attr('data-residentialAddress');
    var admissionNo = $(this).attr('data-admissionNo');

    // show the value on fee modal
    $('#single-student-profile-modal').modal('show');
    $('#studentNameStudentProfile').html(studentName);
    $('#fatherNameStudentProfile').html(fatherName);
    $('#rollNoStudentProfile').html(rollNo);
    $('#sessionYearStudentProfile').html(sessionYear);
    $('#classStudentProfile').html(className);
    $('#fathersMobileStudentProfile').html(fathersMobile);
    $('#studentImageStudentProfile').html('<img src="' + base_url + 'assets/students_img/' + studentImage + '" alt="Image" />');
    $('#parentImageStudentProfile').html('<img src="' + base_url + 'assets/parents_img/' + parentImage + '" alt="Image" />');
    $('#stuIdStudentProfile').html(stuId);
    $('#bloodGroupStudentProfile').htm
    $('#studentCategoryStudentProfile').htm
    $('#religionStudentProfile').htm
    $('#occupationFatherStudentProfile').htm
    $('#occupationMotherStudentProfile').htm
    $('#residentialAddressStudentProfile').htm
    $('#admissionNoStudentProfile').html(admissionNo);
});

//---------END ALL-STUDNETS LIST PAGE SHOW STUDENTS PROFILE INFO---------


//----------------------------VALIDATING THE FATHER MOBILE NUMBER-------------------------------
// TIME OF REGISTRATION REAL TIME CHECK FATHER NUMBER IF IT ALREDY EXIST OR NOT INFORM THE ADMIN
	$('#fathersMobile').on('keyup', function(){
        var fathersMobile = $('#fathersMobile').val();
        $.ajax({
            url: base_url + 'student/checkFathersMobileNumber',
            type: 'post',
            data: {fathersMobile: fathersMobile},
            dataType: 'json',
            success: function(res) {
                if( res !== "null") {
                    $('#fathersMobile').parent().addClass("alert alert-danger");
                    $('#fathersMobile').siblings("span").text(res);
                }else{
                    $('#fathersMobile').parent().addClass("alert alert-success");
                    $('#fathersMobile').siblings("span").text("New Mobile Number");
                }
            }
        });
    });

//-------------------------------NEW STUDENT REGISTRAION---------------------------------------
//REGISTER NEW STUDENT WILL FULL SERVER SIDE VALIDATION
	$('#submit').submit(function(e){
        e.preventDefault(); 
         $.ajax({
             url: base_url + 'Student/studentRegistrationFormData/',
             type:"post",
             dataType: 'json',
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(data){
                // alert(data.success);
                console.log(data);
                if($.isEmptyObject(data.error)){
                    $(".print-error-msg").css('display','none');
                    $('.print-success-msg').css('display','block');
                    window.location.href = base_url+data.redirect;
                }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                }
            }
         });
    });

//REGISTER NEW STUDENT WILL FULL SERVER SIDE VALIDATION
	$('#edit-student-form').submit(function(e){
        e.preventDefault(); 
         $.ajax({
             url: base_url + 'Student/editStudentFormData/',
             type:"post",
             dataType: 'json',
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(data){
                // alert(data.success);
                console.log(data);
                if($.isEmptyObject(data.error)){
                    $(".print-error-msg").css('display','none');
                    $('.print-success-msg').css('display','block');
                    window.location.href = base_url+data.redirect;
                }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                }
            }
         });
    });    

//STUDENT FEE COLLECTION STUDENT DETAIL PAGE AFTER REGISTRAION
	$('#feesubmit').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
            url: base_url + 'Student/feeCollection',
            type: 'post',
            dataType: 'json',
            data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(res) {
            	// console.log(res);
                if ($.isEmptyObject(res.error)){
                    window.location.href = base_url + res.redirect;
                } else{
                    $(".print-success-ye").css('display','none');
                    $(".print-error-fee").css('display','block');
                    $(".print-error-fee").html(res.error);
                }
            }
        });   		
    });
    
//SINGLE STUDENT MONTHS FEE HISTORY SHOW ON LEFT MODAL BY THIS
$('.student-fee-history').on('click', function () {
    var studentName = $(this).attr('data-studentName');
    var month = $(this).attr('data-month');
    var tuitionFee = $(this).attr('data-tuitionFee');
    var computerFee = $(this).attr('data-computerFee');
    var lateFee = $(this).attr('data-lateFee');
    var arrears = $(this).attr('data-arrears');
    var vehicalFee = $(this).attr('data-vehicalFee');
    var otherCharges = $(this).attr('data-otherCharges');
    var monthTotalFee = $(this).attr('data-monthTotalFee');
    
    // show the value on fee modal
    $('#get-student-fee-detail').modal('show');
    $('#oneMonthstudentName').html(studentName);
    $('#oneMonthmonth').html(month);
    $('#oneMonthtuitionFee').html(tuitionFee);
    $('#oneMonthcomputerFee').html(computerFee);
    $('#oneMonthlateFee').html(lateFee);
    $('#oneMontharrears').html(arrears);
    $('#oneMonthvehicalFee').html(vehicalFee);
    $('#oneMonthotherCharges').html(otherCharges);
    $('#oneMonthmonthTotalFee').html(+monthTotalFee + +vehicalFee);    
});

// SINGLE STUDENT FULL YEAR FEE REPOST ON LEFT MODAL BY THIS
$('.full-year-fee-history').on('click', function () {
    var studentName = $(this).attr('data-studentName');
    var studentID = $(this).attr('data-studentID');
    var vehicalFees = $(this).attr('data-vehicalFees');
    var Jan = $(this).attr('data-Jan');
    var Feb = $(this).attr('data-Feb');
    var Mar = $(this).attr('data-Mar');
    var Apr = $(this).attr('data-Apr');
    var May = $(this).attr('data-May');
    var Jun = $(this).attr('data-Jun');
    var Jul = $(this).attr('data-Jul');
    var Aug = $(this).attr('data-Aug');
    var Sep = $(this).attr('data-Sep');
    var Oct = $(this).attr('data-Oct');
    var Nov = $(this).attr('data-Nov');
    var Dec = $(this).attr('data-Dec');
    var remaningFee = $(this).attr('data-remaningFee');
    var totalFee = $(this).attr('data-totalFee');
    var totalFeeSum = +vehicalFees + +Jan + +Feb + +Mar + +Apr + +May + +Jun + +Jul + +Aug + +Sep + +Oct + +Nov + +Dec;    

    // SHOW DATA ON MODAL
    $('full-year-fee-report').modal('show');
    $('#feeMonthstudentName').html(studentName);
    // $('#feeMonthstudentID').html(studentID);
    $('#feeMonthdepositeMonthFee').html('<a class="modal-trigger alert text-info bg-warning" href="' + base_url +'Account/depositeStudentFee/'+studentID+'" target="_blank"> <strong class="text-info">Click to Deposit Student Fee form Here.</strong></a >')
    $('#vehicalFees').html(vehicalFees);
    $('#feeMonthJan').html(Jan);
    $('#feeMonthFeb').html(Feb);
    $('#feeMonthMar').html(Mar);
    $('#feeMonthApr').html(Apr);
    $('#feeMonthMay').html(May);
    $('#feeMonthJun').html(Jun);
    $('#feeMonthJul').html(Jul);
    $('#feeMonthAug').html(Aug);
    $('#feeMonthSep').html(Sep);
    $('#feeMonthOct').html(Oct);
    $('#feeMonthNov').html(Nov);
    $('#feeMonthDec').html(Dec);
    $('#remaningFee').html(remaningFee);
    $('#totalFee').html(totalFee);
    $('#totalFeeSum').html(totalFeeSum);
    // console.log(totalFeeSum);
});

// STUDENT PROMOTION TO NEW CLASS METHOD
$('#promotionToNewClass').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'Student/promotionToNewClass',
        type: 'post',
        dataType: 'json',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
            // console.log(data);
            if($.isEmptyObject(data.error)){
                $(".print-error-msg").css('display','none');
                $('.print-success-msg').css('display','block');
                $('.print-success-msg').html(data.success);

                // FETCH STUDNETS DETAILS AND SHOW THEM ON TABLE
                $('.student-promotion-list-section').css('display','block');
                // $('#student-promotion-table').dataTable();
                // console.log(data.studentData.length);
                var i = 0;
                var html = '';
                var promotionsession = data.promotionData.promotionsession;    
                var newclass = data.promotionData.newclass;
                for(i = 0; i < data.studentData.length; i++) {
                    html += '<tr>'+
                            '<td><div class="form-check"><input type="checkbox" name="pStuId" value="'+data.studentData[i].stuId+'" class="form-check-input"><label class="form-check-label oldRollNumber">'+data.studentData[i].rollNo+'</label></div></td>'+
                            '<td><input type="text" class="pNewRollNo" name="newRollNumber"></td>'+
                            '<td class="pStudentName">'+data.studentData[i].studentName+'</td>'+
                            '<td class="pClass">'+data.studentData[i].class+'</td>'+
                            '<td class="pSessionYear">'+data.studentData[i].sessionYear+'</td>'+
                            '<td class="pFaterName">'+data.studentData[i].fatherName+'</td>'+
                            '<td class="pAdmissionDate">'+data.studentData[i].admissionDate+'</td>'+
                            '</tr>';
                }
                $('#student-promotion-table-data').html(html);
                // add currentclass and currentsession on append
                var currentclassAndSession = '<input type="hidden" class="getpromotionsession" name="getpromotionsession" value="'+promotionsession+'"><input type="hidden" class="getnewclass" name="getnewclass" value="'+newclass+'">';
                $('#student-promotion-table-data').append(currentclassAndSession);        
                
                // Get new class and session data
                // var j = 0;
                // var html2 = '';
                // var data2 = data.promotionData.length;
                // // console.log('get it',data.promotionData);
                // for(j = 0; j < data2; j++){
                //     html2 += '<input type="hidden" class="promotionsession" name="promotionsession" value="'+data2[i].promotionsession+'"><input type="hidden" class="newclass" name="newclass" value="'+data2[i].newclass+'">';
                // }
                // $('.get-newclass-and-session').html(html2);
                // window.location.href = base_url+data.redirect;
            }else{
                $(".print-error-msg").css('display','block');
                $(".print-error-msg").html(data.error);
            }
        }
    });
});

// GET PROMOTIONAL STUDENTS DATA TO PASS CONTROLLER
$('#promote-student-button').on('click', function(){

    $.each($('table tbody').find('tr'),function(i,data){
        if($($(data).find('input[type="checkbox"]')).is(':checked')){
         $(".print-error-msg").css('display','none');
         //You can get all the values respectively of tr
         if(data){
             var promotionStudentData = [];
                promotionStudentData.push({
                    'pStuId': $(this).find('td div input[name="pStuId"]').val(),
                    'oldRollNumber': $(this).find('td label.oldRollNumber').text(),
                    'pNewRollNO': $(this).find('td input[name="newRollNumber"]').val(),
                    'pStudentName': $(this).find('td.pStudentName').text(),
                    'pClass': $(this).find('td.pClass').text(),
                    'pSessionYear': $(this).find('td.pSessionYear').text(),
                    'pFaterName': $(this).find('td.pFaterName').text(),
                    'pAdmissionDate': $(this).find('td.pAdmissionDate').text()      
                });        
                var promotionsession = $('.getpromotionsession').val();
                var newclass = $('.getnewclass').val(); 
                // Passing data to fucntion as array
                // console.log(promotionStudentData);
                $.ajax({
                    type: 'post',
                    url: base_url + 'Student/promotionStudentData',
                    data: {promotionStudentData, promotionsession, newclass},
                    dataType: 'json',
                    cache: false,
                    success: function(res){
                        window.location.href = base_url + res.redirect;
                    }
                });

         }else{
            $(".print-error-msg").css('display','block');
            $(".print-error-msg").html('Please clicking on checkbox to select students whom you want to promot on next class and also once more check you selected right class to promote for?');
         }
        }
    });
});

/*----------------------------------------------------------------------------------------------
										END STUDENT SECTION
------------------------------------------------------------------------------------------------*/




/*----------------------------------------------------------------------------------------------
										START TEACHER SECTION
------------------------------------------------------------------------------------------------*/
//REGISTER NEW TEACHER WILL FULL SERVER SIDE VALIDATION
	$('#add-new-teacher').submit(function(e){
        e.preventDefault(); 
         $.ajax({
             url: base_url + 'Teacher/new_teacher_registration/',
             type:"post",
             dataType: 'json',
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(data){
                // alert(data.success);
                // console.log(data);
                if($.isEmptyObject(data.error)){
                    $(".print-error-msg").css('display','none');
                    $('.print-success-msg').css('display','block');
                    window.location.href = base_url+data.redirect;
                }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                }
            }
         });
    });

//REGISTER NEW TEACHER WILL FULL SERVER SIDE VALIDATION
	$('#edit-teacher-form').submit(function(e){
        e.preventDefault(); 
         $.ajax({
             url: base_url + 'Teacher/edit_teacher_registration/',
             type:"post",
             dataType: 'json',
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
            success: function(data){
                // alert(data.success);
                // console.log(data);
                if($.isEmptyObject(data.error)){
                    $(".print-error-msg").css('display','none');
                    $('.print-success-msg').css('display','block');
                    window.location.href = base_url+data.redirect;
                }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                }
            }
         });
    });
/*----------------------------------------------------------------------------------------------
										END TEACHER SECTION
------------------------------------------------------------------------------------------------*/




/*------------------------------------------------------------------------------------------------
					                    START CLASS SECTION
------------------------------------------------------------------------------------------------*/
$(document).ready(function () {

        // class-wise-students-session-form ID TO GET THE SESSION YEAR TO GET RELATED YEAR STUDENTS LIST
        $('#class-wise-students-session-form').on('submit', function(e){
            e.preventDefault();
            var session_year = $('#classsessionYear').val();
            // console.log('year',session_year);
            $.ajax({
                url: base_url + 'welcome/ClassWiseStudentsDetailBySessionYear',
                type: 'post',
                data: {session_year: session_year},
                dataType: 'json',
                success: function(data) {
                    var classWiseStudentDataTbody = '';
                    var i=0;
                    var j=1;
                    for(i=0; i<data.classWiseStudents.length; i++){
                        classWiseStudentDataTbody += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td><a href="'+base_url+'welcome/classWiseStudentList/'+data.classWiseStudents[i].classId+'" target="_blank">'+data.classWiseStudents[i].class+'</a></td>'+
                                '<td>'+data.classWiseStudents[i].sessionYear+'</td>'+
                                '<td>'+data.classWiseStudents[i].totalStudent+'</td>'+
                                '<td class="alert alert-danger">'+data.classWiseStudents[i].dewFee+'</td>'+
                                '<td class="alert alert-success">'+data.classWiseStudents[i].collectedFee+'</td>'+
                                '<td class="alert alert-primary">'+data.classWiseStudents[i].totalFee+'</td>'+
                                '</tr>';
                        j++;
                    }
                    $('#class-wise-student-data-tbody').html(classWiseStudentDataTbody);
                }
            });
        });




/*---START YEARLY CLASS SECTION -----------------------------------*/

        show_product(); //for calling this function on each action case
        $('#myTable').dataTable();

        var session_list;
        // get table data from database
        function show_product() {
            // $('#myTable').dataTable({
            $.ajax({
                type: 'ajax',
                url: base_url + 'Student/getYearlyFee',
                async: true,
                dataType: 'json',
                success: function(data){
                    // console.log(data);
                    // console.log(data.detail[0]);
                    var html = '';
                    var i=0;
                    var j=1;
                    // var session_list = data.session_list;
                    // console.log(session_list);
                    var data = data.detail;
                    
                    for(i=0; i<data.length; i++){
                        // console.log(data[i].sessionYears);
                        // console.log('hi');
                        html += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td>'+data[i].class+'</td>'+
                                '<td>'+data[i].session+'</td>'+
                                '<td>'+data[i].totalFee+'</td>'+
                                '<td>'+data[i].addedDate+'</td>'+
                                '<td>'+'<a href="javascript:void(0);" class="item_edit" data-year_id="'+data[i].year_id+'" data-class="'+data[i].class+'" data-session="'+data[i].session+'" data-total_fee="'+data[i].totalFee+'" data-sessionid="'+data[i].sessionId+'" data-classid="'+data[i].classId+'"><i class="fas fa-cogs text-dark-pastel-green"></i> Edit</a>'+
                                '</td>'+
                                '</tr>';
                        j++;
                    }
                    // $('#myTable').dataTable($('#tdata').html(html));
                    $('#tdata').html(html);
                }
            });
        }

        // save new data to database
        $('#add-yealy-fee').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: base_url + 'Student/addYearlyFee',
                type: 'post',
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(res){
                    if($.isEmptyObject(res.error)){
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").css('display','block');
                        $(".print-success-msg").html(res.success);
                        show_product();
                    }else{
                        $(".print-success-msg").css('display','none');
                        $(".print-error-msg").css('display','block');
                        $(".print-error-msg").html(res.error);
                        show_product();
                    }
                }
            });
        });

        // get data for update record
        $('#tdata').on('click','.item_edit',function (){
            var year_id = $(this).data('year_id');
            var class_name = $(this).data('class');
            var session   = $(this).data('session');
            var sessionId = $(this).data('sessionid');
            var classId = $(this).data('classid');
            var total_fee  = $(this).data('total_fee');           
            $('#Modal_Edit').modal('show');
            $('[name="year_id"]').val(year_id);
            $('[name="class_name"]').val(class_name);
            $('#class_id').val(classId);
            $('select[name="session"]').append('<option selected value="'+ sessionId +'">'+ session +'</option>');
            $('[name="total_fee"]').val(total_fee);
        });

        // update data on database
        $('#btn_update').on('click',function(){
            var year_id    = $('#year_id').val();
            var class_id = $('#class_id').val();
            var class_name = $('#class_name').val();
            var session    = $('#session').val();
            var total_fee  = $('#total_fee').val();
            $.ajax({
                type: 'post',
                url: base_url + 'Student/updateClassWiseYearlyFee',
                dataType: 'json',
                data: {year_id:year_id,class_id:class_id, class_name:class_name, session:session, total_fee:total_fee},
                success: function(res){
                    if($.isEmptyObject(res.error)) {
                        $('.print-error-msg').css('display','none');
                        $('.print-success-msg').css('display','block');
                        $('.print-success-msg').html(res.success);
                        $('[name="year_id"]').val("");
                        $('[name="class_id"]').val("");
                        $('[name="class_name"]').val("");
                        $('[name="session"]').val("");
                        $('[name="total_fee"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_product();
                        // console.log(res);
                    } else {
                        $('.print-success-msg').css('display','none');
                        $('.print-error-msg').css('display','block');
                        $('.print-error-msg').html(res.error);  
                    }
                }
            });
        });
/*-------END YEARLY CLASS SECTION----------------------------*/

/*-------ADD NEW CLASS SECTION-------------------------------*/

    show_class(); //call function to show all class list
    
    $('#myTable').dataTable().fnDestroy();

    // function show all product
    function show_class(){
        $.ajax({
            type: 'ajax',
            url: base_url + 'Student/getClassList',
            async: true,
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+data[i].class_id+'</td>'+
                            '<td>'+data[i].className+'</td>'+
                            '<td>'+data[i].addedDate+'</td>'+
                            '<td>'+'<a href="javascript:void(0);" class="class_edit" data-class_id="'+data[i].class_id+'" data-class_name="'+data[i].className+'"><i class="fas fa-cogs text-dark-pastel-green"></i> Edit</a>'+
                            '</td>'+
                            '</tr>';
                }
                // $('#myTable').dataTable($('#show_class_data').html(html));
                $('#show_class_data').html(html);
            }
        });
    }

    // show session table
    show_session(); //get session data for table
    $('#sessionTable').dataTable().fnDestroy();
    function show_session(){
        $.ajax({
            type: 'ajax',
            url: base_url + 'Student/getSessionList',
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i=0; i<data.length; i++) {
                    html += '<tr>'+
                            '<td>'+data[i].session_id+'</td>'+
                            '<td>'+data[i].sessionYears+'</td>'+
                            '<td>'+data[i].addedDate+'</td>'+
                            '<td>'+'<a href="javascript:void(0);" class="session_edit" data-session_id="'+data[i].session_id+'" data-session_years="'+data[i].sessionYears+'"><i class="fas fa-cogs text-dark-pastel-green"></i> Edit</a>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_session_data').html(html);
            }
        });
    }

    $('#add-class').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: base_url + 'Student/addNewClass',
            type: 'post',
            dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(res){
                if($.isEmptyObject(res.error)){
                    $("#className").val('');
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").css('display','block');
                    $(".print-success-msg").html(res.success);
                    // window.location.href = res.redirect;
                    show_class();
                }else{
                    $(".print-success-msg").css('display','none');
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(res.error);
                    show_class();
                }
            }
        });
    });

    // get class edit data
    $('#show_class_data').on('click','.class_edit',function () {
        var class_id = $(this).data('class_id');
        var class_name = $(this).data('class_name');
        console.log(class_id);
        $('#Class_Modal_Edit').modal('show');
        $('[name="class_edit_id"]').val(class_id);
        $('[name="classNameEdit"]').val(class_name);
        $(".print-error-msg").css('display','none');
        $(".print-success-msg").css('display','none');          
    });

    // update class data
    $('#btn_class_update').on('click', function() {
        var class_id = $('#class_edit_id').val();
        var class_name = $('#classNameEdit').val();

        $.ajax({
            url: base_url + 'Student/updateClassName',
            type: 'post',
            dataType: 'json',
            data: {class_id: class_id, className: class_name},
            async: false,
            cache: false,
            success: function(res) {
                console.log(res);
                if($.isEmptyObject(res.error)){
                    $('#class_edit_id').val('');
                    $('[name="classNameEdit"]').val('');                    
                    $('#Class_Modal_Edit').modal('hide');
                    
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").css('display','block');
                    $(".print-success-msg").html(res.success);
                    // window.location.href = res.redirect;
                    show_class();
                }else{
                    $(".print-success-msg").css('display','none');
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(res.error);
                    show_class();
                }
            }
        });         
    });

    // get session edit data
    $('#show_session_data').on('click','.session_edit',function () {
        var session_id = $(this).data('session_id');
        var sessionYears = $(this).data('session_years');        
        $('#Session_Modal_Edit').modal('show');
        $('[name="editSession_id"]').val(session_id);
        $('[name="editSessionYears"]').val(sessionYears);
        $(".print-success-ye").css('display','none');
        $(".print-error-ye").css('display','none');            
    });

    // update session data
    $('#btn_session_update').on('click', function() {
        var editSession_id = $('#editSession_id').val();
        var editSessionYears = $('#editSessionYears').val();

        $.ajax({
            url: base_url + 'Student/updateSessionYear',
            type: 'post',
            dataType: 'json',
            data: {editSession_id: editSession_id, editSessionYears: editSessionYears},
            async: false,
            cache: false,
            success: function(res) {

                if($.isEmptyObject(res.error)){
                    $('#editSession_id').val('');
                    $('[name="editSessionYears"]').val('');                    
                    $('#Session_Modal_Edit').modal('hide');
                    
                    $(".print-error-ye").css('display','none');
                    $(".print-success-ye").css('display','block');
                    $(".print-success-ye").html(res.success);
                    show_session();
                    // window.location.href = res.redirect;
                }else{
                    $(".print-success-ye").css('display','none');
                    $(".print-error-ye").css('display','block');
                    $(".print-error-ye").html(res.error);
                    show_session();
                }
            }
        });         
    });


    $('#add-session').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: base_url + 'Student/addNewSessionYear',
            type: 'post',
            dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(res) {
                if($.isEmptyObject(res.error)) {
                    $("#sessionYears").val('');
                    $(".print-error-ye").css('display','none');
                    $(".print-success-ye").css('display','block');
                    $(".print-success-ye").html(res.success);
                    show_session();
                }else{
                    $(".print-success-ye").css('display','none');
                    $(".print-error-ye").css('display','block');
                    $(".print-error-ye").html(res.error);
                    show_session();
                }
            }
        });
    });
/*----------END NEW CLASS SECTION------------------------------*/

/*----------START CLASS LIST SECTION---------------------------*/
	show_class_list();
	function show_class_list() {
		$.ajax({
                type: 'ajax',
                url: base_url + 'Student/getYearlyFee',
                async: true,
                dataType: 'json',
                success: function(data){
                    var html = '';
                    var i=0;
                    var j=1;
                    var data = data.detail;
                    
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+j+'</td>'+
                                '<td>'+data[i].class+'</td>'+
                                '<td>'+data[i].session+'</td>'+
                                '<td>'+data[i].totalFee+'</td>'+
                                '<td>'+data[i].addedDate+'</td>'+
                                '</tr>';
                        j++;
                    }
                    $('#classlist-data').html(html);
                }
            });
	}
/*---------END CLASS LIST SECTION------------------------------*/

});
/*-----------------------------------------------------------------------------------------------
					                    END CLASS SECTION
------------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------
					                START ACCOUNT SECTION
------------------------------------------------------------------------------------------------*/

//---------ON ALL-STUDNETS-FEE LIST PAGE SHOW STUDENTS PROFILE INFO---------

$('.account-single-student-profile').on('click', function () {
    var studentName = $(this).attr('data-studentName');
    var fatherName = $(this).attr('data-fatherName');
    var rollNo = $(this).attr('data-rollNo');
    var sessionYear = $(this).attr('data-sessionYear');
    var className = $(this).attr('data-class');
    var fathersMobile = $(this).attr('data-fathersMobile');
    var studentImage = $(this).attr('data-studentImage');
    var parentImage = $(this).attr('data-parentImage');
    var fee_id = $(this).attr('data-fee_id');
    var studentID = $(this).attr('data-studentID');
    var admissionNo = $(this).attr('data-admissionNo');

    // show the value on fee modal
    $('#account-single-student-profile-modal').modal('show');
    $('#studentNameAccountProfile').html(studentName);
    $('#fatherNameAccountProfile').html(fatherName);
    $('#rollNoAccountProfile').html(rollNo);
    $('#sessionYearAccountProfile').html(sessionYear);
    $('#classAccountProfile').html(className);
    $('#fathersMobileAccountProfile').html(fathersMobile);
    $('#studentImageAccountProfile').html('<img src="' + base_url +'assets/students_img/'+studentImage+'" alt="Image" />');
    $('#parentImageAccountProfile').html('<img src="' + base_url + 'assets/parents_img/' + parentImage + '" alt="Image" />');
    $('#fee_idAccountProfile').html(fee_id);
    $('#studentIDAccountProfile').html(studentID);
    $('#admissionNoAccountProfile').html(admissionNo);
});
//---------END ON ALL-STUDNETS-FEE LIST PAGE SHOW STUDENTS PROFILE INFO---------

// GET NAME OF SCHOOL STAF FOR ADD EXPENSE
	$('#account-add-expanse').on('submit', function(e){
        e.preventDefault();
        // var stafNameForExpanse = $('#stafNameForExpanse').val();
        $.ajax({
            url: base_url + 'Account/addExpense',
            type: 'post',
            dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(res) {
                // console.log(res);
                if( $.isEmptyObject(res.error) ) {
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").css('display','block');
                    $(".print-success-msg").html(res.success);
                    $('#account-add-expanse')[0].reset();
                }else{
                    // $(".print-totalmessage-msg").html('');
                    $(".print-success-msg").css('display','none');
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(res.error);
                }
            }
        })
    });
/*-----------------------------------------------------------------------------------------------
					                END ACCOUNT SECTION
------------------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------------------
					                MESSAGE SECTION
------------------------------------------------------------------------------------------------*/

// MESSAGE CLASS WISE SECTION
// GET MESSAGE BODY CONTENT AND PASS TO THE CONTROLLER FOR FURTHER WORK
$('#sendMessageForm').submit(function (e) {
    e.preventDefault();
    var messagecontent = $('#messagecontent').val();
    var messageSessionlist = $("#messageSessionlist").val();
    var messageClassId = $("#messageClassId").val();
    $.ajax({
        url:base_url + 'Messages/getMessageBody',
        type:'post',
        dataType:'json',
        data:{messagecontent:messagecontent,messageSessionlist:messageSessionlist,messageClassId:messageClassId},
        success: function (res) {
            // console.log(res);
            if($.isEmptyObject(res.error)) {
                // console.log(res.totalMessage);
                $("#messagecontent").val('');
                $(".print-error-msg").css('display','none');
                $(".print-success-msg").css('display','block');
                $(".print-success-msg").html(res.success);
            }else{
                // $(".print-totalmessage-msg").html('');
                $(".print-success-msg").css('display','none');
                $(".print-error-msg").css('display','block');
                $(".print-error-msg").html(res.error);
            }
        }
    });
});

// COUNT TEXT CHARACTERS TO LIMT THEM AND SHOW THE USER ERROR IF TEXT EXCEADS THE LIMIT
function limitTextCountOnMessage(limitField, limitCount, limitMessageNum, limitNum) {
    
    // count message text char
    limitCount.value = limitField.value.length;
    
    if (limitField.value.length > limitNum) {
        var countText = limitField.value.length / limitNum;
        limitMessageNum.value = Math.ceil(countText);
    }
}

// MESSAGE TO ALL SECTION
$('#sendMessageToAllForm').submit(function (e) {
    e.preventDefault();
    var messagecontent = $('#messagecontent').val();
    var messageSessionlist = $("#messageSessionlist").val();
    $.ajax({
        url:base_url + 'Messages/sendMessageToAll',
        type:'post',
        dataType:'json',
        data:{messagecontent:messagecontent,messageSessionlist:messageSessionlist},
        success: function (res) {
            // console.log(res);
            if($.isEmptyObject(res.error)) {
                // console.log(res.totalMessage);
                $("#messagecontent").val('');
                $(".print-error-msg").css('display','none');
                $(".print-success-msg").css('display','block');
                $(".print-success-msg").html(res.success);
            }else{
                // $(".print-totalmessage-msg").html('');
                $(".print-success-msg").css('display','none');
                $(".print-error-msg").css('display','block');
                $(".print-error-msg").html(res.error);
            }
        }
    });
});

// MESSAGE PAGE FILTER SECTION
$(document).ready(function() {
    // GET CLASS LIST BEHALF OF THE 
    $('#messageSessionlist---NotInUse').change(function() {
        var sessionYear = $(this).val();
        console.log('sessio year: ',sessionYear);
        $.ajax({
            url:base_url+'Messages/getClassList',
            method:'post',
            data:{sessionYear: sessionYear},
            dataType:'json',
            success: function(res) {
                // console.log(res);
                var html = '<option value="">Select Class</option>';
                var i;
                for (i=0; i<res.classList.length; i++) {
                    // console.log(res.classList[i].class_id);
                    $('#messageClassList').append('<option value="'+res.classList[i].class_id+'">'+res.classList[i].className+'</option>');
                }
                // $('#messageClassList').html(html);
                // $('#messageClasslist').after('<input type="hidden" name="sessionId" id="sessionId" value="'+res.sessionId+'"');
                // $('#sessionId').val(res.sessionId);
            }
        });
        return false;
    });
});

/*-----------------------------------------------------------------------------------------------
					                END MESSAGE SECTION
------------------------------------------------------------------------------------------------*/