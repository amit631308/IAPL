<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*---------------------------------------------------------------------------
THESE COMMON HELPERS ARE VERY USEFULL AND MOSTLY USE IN MANY CONTROLLERS
THRE IS FOLLOWING COMMON HELPER FUNCTIONS ARE AVAILABLE:
1. imageUploadWithWaterMarkHelper()
    THIS FUNCTION HELPS TO UPLOAD IMAGE WITH RESIZE AND WATERMARK ON IMAGE

2. imageUploadHelper()
    THIS FUNCTION HELPS TO UPLOAD IMAGE WITH RESIZE ONLY IN CASE OF UPLOAD IMAGE
    ON WHICH YOU DON'T WANT TO ADD WATERMARK THEN USE THIS ONE
-----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
DOCUMENT UPLOAD WITH WATERMARK SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('documentUploadHelper')) {
    /*
    $document: Get full file data
    $uploadPath: path where you want to upload your file
    $allowedTypes: allowed file types
    $documentName: name of file\
    */
    function documentUploadHelper($document, $uploadPath, $allowedTypes, $documentName)
    {
        //get main CodeIgniter object
        $ci = &get_instance();

        if (isset($document['name']) && $document['name'] != "") {
            $ci->load->library(array('image_lib', 'upload'));
            // $ci->load->library('upload');
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = $allowedTypes;
            $config['encrypt_name'] = TRUE;

            $ci->upload->initialize($config);

            if ($ci->upload->do_upload($documentName)) {
                $imageName = $ci->upload->data();
                return $imageName;
            } else {
                echo $ci->upload->display_errors();
            }
            // $ci->upload->clear();
        } else {
            return array('file_name' => 'common.gif');
        }
    }
}
/*---------------------------------------------------------------------------
END DOCUMENT UPLOAD SECTION
----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
IMAGE UPLOAD WITH WATERMARK SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('imageUploadWithWaterMarkHelper')) {
    function imageUploadWithWaterMarkHelper($fileName, $uploadPath, $allowedTypes, $fileSubName)
    {
        //get main CodeIgniter object
        $ci = &get_instance();

        if (isset($fileName['name']) && $fileName['name'] != "") {
            $ci->load->library(array('image_lib', 'upload'));
            // $ci->load->library('upload');
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = $allowedTypes;
            $config['encrypt_name'] = TRUE;

            $ci->upload->initialize($config);

            if ($ci->upload->do_upload($fileSubName)) {
                $imageName = $ci->upload->data();

                // resize and compress iamge
                // $resizeconfig = array(
                //     'image_library' => 'gd2',
                //     'source_image' => $uploadPath . $imageName['file_name'],
                //     'create_thumb' => FALSE,
                //     'maintain_ratio' => TRUE,
                //     'quality' => '50%',
                //     'width' => 300,
                //     'height' => 300
                // );
                // $ci->image_lib->initialize($resizeconfig);
                // if (!$ci->image_lib->resize()) {
                //     echo $ci->image_lib->display_errors();
                // }
                // $ci->image_lib->clear();

                // image watermark
                // $watermarkconfig['image_library'] = 'gd2';
                // $watermarkconfig['source_image'] = $uploadPath . $imageName['file_name'];
                // $watermarkconfig['wm_text'] = 'Copyright ' . date('Y') . ' Chaudhary Sushil';
                // $watermarkconfig['wm_type'] = 'text';
                // $watermarkconfig['wm_hor_alignment'] = 'L';
                // $watermarkconfig['wm_shadow_color'] = '#000000';
                // $watermarkconfig['wm_font_size'] = '14';
                // $ci->image_lib->initialize($watermarkconfig);
                // $ci->image_lib->watermark();
                // $ci->upload->clear();
                return $imageName;
            } else {
                echo $ci->upload->display_errors();
            }
            // $ci->upload->clear();
        } else {
            return array('file_name' => 'common.gif');
        }
    }
}
/*---------------------------------------------------------------------------
END IMAGE UPLOAD SECTION
----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
IMAGE UPLOAD SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('imageUploadHelper')) {
    // $secondImage = 
    function imageUploadHelper($secondImage, $uploadPathIdProof, $allowedTypesId, $fileSubName2)
    {
        //get main CodeIgniter object
        $ci = &get_instance();
        $ci->load->library(array('image_lib', 'upload'));

        if (isset($secondImage['name']) && $secondImage['name'] != "") {
            $config['upload_path'] = $uploadPathIdProof;
            $config['allowed_types'] = $allowedTypesId;
            $config['encrypt_name'] = TRUE;
            $ci->upload->initialize($config);
            if ($ci->upload->do_upload($fileSubName2)) {
                $imageNameOfIdProof = $ci->upload->data();

                // resize and compress iamge
                $resizeconfig = array(
                    'image_library' => 'gd2',
                    'source_image' => $uploadPathIdProof . $imageNameOfIdProof['file_name'],
                    'create_thumb' => FALSE,
                    'maintain_ratio' => TRUE,
                    // 'quality' => '70%',
                    'width' => 800,
                    'height' => 600
                );
                $ci->image_lib->initialize($resizeconfig);
                if (!$ci->image_lib->resize()) {
                    echo $ci->image_lib->display_errors();
                }
                $ci->image_lib->clear();
                return $imageNameOfIdProof;
            } else {
                echo $ci->upload->display_errors();
            }
            $ci->upload->clear();
        } else {
            return array('file_name' => 'common.gif');
        }
    }
}
/*---------------------------------------------------------------------------
END IMAGE UPLOAD SECTION
----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
DELETE IMAGE SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('deleteImageHelper')) {
    function deleteImageHelper($secondImage, $uploadPathIdProof, $allowedTypesId)
    {
        //get main CodeIgniter object
        $ci = &get_instance();
        $ci->load->library(array('image_lib', 'upload'));

        if (isset($secondImage['name']) && $_FILES['teacherIdProofImage']['name'] != "") {
            $config['upload_path'] = $uploadPathIdProof;
            $config['allowed_types'] = $allowedTypesId;
            $config['encrypt_name'] = TRUE;
            $ci->upload->initialize($config);
            if ($ci->upload->do_upload("teacherIdProofImage")) {
                $imageNameOfIdProof = $ci->upload->data();

                // resize and compress iamge
                $resizeconfig = array(
                    'image_library' => 'gd2',
                    'source_image' => $uploadPathIdProof . $imageNameOfIdProof['file_name'],
                    'create_thumb' => FALSE,
                    'maintain_ratio' => TRUE,
                    // 'quality' => '70%',
                    'width' => 800,
                    'height' => 600
                );
                $ci->image_lib->initialize($resizeconfig);
                if (!$ci->image_lib->resize()) {
                    echo $ci->image_lib->display_errors();
                }
                $ci->image_lib->clear();
                return $imageNameOfIdProof;
            } else {
                echo $ci->upload->display_errors();
            }
            $ci->upload->clear();
        } else {
            return array('file_name' => 'common.gif');
        }
    }
}
/*---------------------------------------------------------------------------
END IMAGE UPLOAD SECTION
----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
SEND MESSAGE API SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('sendMessageMultiUser')) {
    function sendMessageMultiUser($mobileNumbers, $messagecontent)
    {
        //get main CodeIgniter object
        $ci = &get_instance();

        foreach ($mobileNumbers as $key => $value) {
            // echo $value['fathersMobile'];
            // echo '<pre>';print_r($value);
            // echo $value;
            $adminSMS = array(
                'api_id' => 'APIHGRn7M4m11431',
                'api_password' => '$2y$10$F9Dr4BrGPaD4ykGAzeQfkOTFzAUovgTPaN/upYBPTP/sxAr/gWxai',
                'sms_type' => 'Transactional',
                'sms_encoding' => 'text',
                'sender' => 'GNMPPL',
                'number' => $value['fathersMobile'], //8802996920,9205903598
                'message' => $messagecontent
                // 'message' => substr($page, 0, 40)."\n\nN:".$name."\nMo: ".$phone."\nE: ".$email."\nCity: ".$city."\nMes: ".substr($message, 0, 40)
            );
            $data_string = json_encode($adminSMS);
            $ch = curl_init('http://bulksms.nexcuit.com/api/send_sms_multi');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string)
                )
            );
            curl_exec($ch);
            curl_close($ch);
        }
    }
}
/*---------------------------------------------------------------------------
END MESSAGE API SECTION
----------------------------------------------------------------------------*/


/*----------------------------------------------------------------------------
START SEARCH FUNCTION - COMMON FOR ALL
-----------------------------------------------------------------------------*/
if (!function_exists('commonSearchResult')) {
    function commonSearchResult()
    {
        //get main CodeIgniter object
        $ci = &get_instance();

        //load databse library
        $ci->load->database();
        if ($type == 'serchExpense') {
            $query = $ci->db->query("SELECT * FROM school_expense WHERE expenseDate LIKE '%$searchData%' OR expenseName LIKE '%$searchData%' OR expenseComment LIKE '%$searchData%' ORDER BY expenseId DESC");
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        } else {
            return false;
        }
        // echo '<pre>';print_r($data);exit();
    }
}
/*----------------------------------------------------------------------------
* END SERCH FUNCTION
-----------------------------------------------------------------------------*/

// --------------Email details to use for sending email----------------------
if(!function_exists('email_sender_info')){
    function email_sender_info($email, $reply_to, $subject, $message){
        $ci = &get_instance();
        $config = array(
            'protocol' => 'mail', //mail protocol for godaddy to send mail not smtp
            //   'smtp_host' => 'smtp.gmail.com',
            // 'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_host' => 'smtpout.secureserver.net',
            'smtp_port' => 587,
            'smtp_timeout' => 7,
            // 'smtp_user' => 'devendra.fibso@gmail.com', // change it to yours
            // 'smtp_pass' => 'devendra@9648yadav', // change it to yours
            'smtp_user' => 'donotreply@iaplinstitute.com',
            'smtp_pass' => ')*8m_bz3Pdt1',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'wordwrap' => TRUE,
            'validation' => TRUE,
            'newline' => '\r\n'
        );
    
        $ci->load->library('email', $config);
        $ci->email->set_newline("\r\n");
        $ci->email->from('donotreply@iaplinstitute.com','IAPL Institute'); // change it to yours
        $ci->email->reply_to($reply_to);
        $ci->email->to($email); // change it to yours
        $ci->email->subject($subject);
        $ci->email->message($message);
        return $ci;
    }
}
// --------------Email details to use for sending email----------------------

/*----------------------------------------------------------------------------
// EMAIL SECTION: SEND SUBJECT AND MESSAGAE ONLY
-----------------------------------------------------------------------------*/
if(!function_exists('send_admin_mail_with_attachment')){
    function send_admin_mail_with_attachment($email, $reply_to, $subject, $message, $doc_file)
    {        
        
        $ci = email_sender_info($email, $reply_to, $subject, $message);

        if($doc_file != ''){
            $ci->email->attach($doc_file);
        }

        if ($ci->email->send()) {
            return true;
            // echo 'send mail';
        } else {
            return false;
            //  show_error($ci->email->print_debugger());
        }
    }
}

/*----------------------------------------------------------------------------
// EMAIL SECTION: SEND SUBJECT AND MESSAGAE ONLY
-----------------------------------------------------------------------------*/
if(!function_exists('send_user_mail')){
    // This email send basic email body without attachments.
    function send_user_mail($email, $reply_to, $subject, $message)
    {        
        
        $ci = email_sender_info($email, $reply_to, $subject, $message);

        if ($ci->email->send()) {
            return true;
            // echo 'send mail';
        } else {
            return false;
            //  show_error($ci->email->print_debugger());
        }
    }
}


if(!function_exists('send_user_info_to_admin')){
    // This email send basic email body without attachments.
    function send_user_info_to_admin($array_data, $reply_to, $email, $subject)
    {                
        // foreach loop to print message
        $message = $subject . " all details\r\n\n";
        foreach($array_data as $key => $value){
            $message.=$key." => ".$value."\r\n";
        }
        // echo '<pre>';print_r($message);die;
        $ci = email_sender_info($email, $reply_to, $subject, $message);

        if ($ci->email->send()) {
            return true;
            // echo 'send mail';
        } else {
            return false;
            //  show_error($ci->email->print_debugger());
        }
    }
}
