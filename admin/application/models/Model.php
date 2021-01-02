<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	// its take full data not single
	public function getSingleData($tableName,$where)
	{
		return $this->db->from($tableName)->where($where)->get()->result_array();
	}

	public function getLimitedData($tableName,$select,$where,$limit)
	{
		return $this->db->select($select)->from($tableName)->where($where)->limit($limit)->get()->result();
	}

	public function insertData($tableName,$arrayData)
	{
		// echo "<pre>";print_r($arraydata);exit();
		return $this->db->insert($tableName,$arrayData);
	}

	public function getAllData($tableName)
	{
		return $this->db->get($tableName)->result_array();
	}

	public function updateData($tableName,$arrayData,$where)
	{
		return $this->db->update($tableName,$arrayData,$where);
	}

	public function getDataBySelectByOrder($tableName,$select,$orderValue,$orderBy)
	{
		return $this->db->select($select)->from($tableName)->order_by($orderValue,$orderBy)->get()->result();
	}
	
	public function deleteData($tableName,$arrayWhere)  // update any Table by using Id    
    {
      return $this->db->delete($tableName,$arrayWhere);
    }

	/*------------------------------------------------------------------------
		GET STUDENT FEE DETAILS FOR SHOWING ON FEE RECIPT OR FETCH DETAILS
		FOR RELATED STUDENT'S QUERYS
	--------------------------------------------------------------------------*/
	// Function use to get full year's month fee and individual month full detail
	// It's join of Students / students_fee and student_wise_fee table for individual studnet data
	public function oneStudentFeeHistoryById($stuId)
	{
		return $this->db->query("SELECT s.studentName,s.fatherName,s.rollNo,s.class as classId,s.sessionYear as sessionId,c.className as class,sy.sessionYears as sessionYear,m.studentFeeId,m.feeDate,m.month,m.monthTotalFee,m.tuitionFee,m.computerFee,m.lateFee,m.arrears,m.vehicalFee,m.otherCharges,m.collectionDate,sf.fee_id,sf.studentID,sf.totalFee,sf.vehicalFees,sf.schoolVehicle,sf.remaningFee,sf.addedDate,sf.Jan,sf.Feb,sf.Mar,sf.Apr,sf.May,sf.Jun,sf.Jul,sf.Aug,sf.Sep,sf.Oct,sf.Nov,sf.Dec FROM student_wise_fee_detail m LEFT JOIN students s ON m.studentID = s.stuId JOIN student_fee sf ON s.stuId=sf.studentID LEFT JOIN class_list c ON s.class = c.class_id LEFT JOIN session_years sy ON sy.session_id = s.sessionYear WHERE s.stuId='$stuId' AND s.sessionYear=m.sessionYear ORDER BY m.studentFeeId DESC")->result_array();
	}
	// Used on feeRecipt function in controller but then no need of this
	// Fee recipt detail already geting by the 
	public function feeReciptDetails($stuId)
	{
		return $this->db->query("SELECT s.studentName,s.fatherName,s.rollNo,s.class as classId,s.sessionYear as sessionId,c.className as class,sy.sessionYears as sessionYear,m.studentFeeId,m.feeDate,m.month,m.monthTotalFee,m.tuitionFee,m.computerFee,m.lateFee,m.arrears,m.vehicalFee,m.otherCharges,m.collectionDate FROM student_wise_fee_detail m LEFT JOIN students s ON m.studentID = s.stuId LEFT JOIN class_list c ON s.class = c.class_id LEFT JOIN session_years sy ON sy.session_id = s.sessionYear WHERE s.stuId='$stuId' ORDER BY m.studentFeeId DESC LIMIT 1 ")->result_array();

	}

	// -------------------------ACCOUNT SECTION QUERYS---------------------------------------------

	public function getAllStudentsJoinFee()
	{
		$query =$this->db->query("SELECT s.admissionNo,s.studentName,s.fatherName,s.rollNo,s.fathersMobile,s.studentImage,s.parentImage,s.class as classId,s.sessionYear as sessionId,c.className as class,sy.sessionYears as sessionYear,sf.fee_id,sf.studentID,sf.totalFee,sf.vehicalFees,sf.schoolVehicle,sf.remaningFee,sf.addedDate,sf.Jan,sf.Feb,sf.Mar,sf.Apr,sf.May,sf.Jun,sf.Jul,sf.Aug,sf.Sep,sf.Oct,sf.Nov,sf.Dec FROM students s LEFT JOIN student_fee sf ON s.stuId=sf.studentID LEFT JOIN class_list c ON s.class = c.class_id LEFT JOIN session_years sy ON sy.session_id = s.sessionYear WHERE s.stuId=sf.studentID AND s.sessionYear=sf.session ORDER BY s.stuId DESC");
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}

}