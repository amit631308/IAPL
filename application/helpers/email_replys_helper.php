<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*---------------------------------------------------------------------------
ALL EMAILS REPLY MESSAGES ARE HERE WITH SUBJECT AND MESSAGE
-----------------------------------------------------------------------------*/

/*---------------------------------------------------------------------------
DOCUMENT UPLOAD WITH WATERMARK SECTION
-----------------------------------------------------------------------------*/
if (!function_exists('email_reply_messages')) {
    /*
    $email_info is use to recive:
    type: like to know from which contact form email message require.
    by this return these details
    */
    function email_reply_messages($email_info)
    {
        // $email_info = array();
        // echo $email_info['type'];
        // print_r($email_info);die;
        if($email_info['type'] == 'career'){
            $response = array(
'subject' => "Thank you for contacting us",
'message' => "
Dear ".$email_info['name'].",

Greetings from IAPL Institute (International Academy of Professional Learning)

Thank You for writing to IAPL Institute (International Academy of Professional Learning). We will go through your mail and will get back to you with the relevant information.

If you have sent us your resume, please note that you should add following information in the subject of the mail: \"YOUR NAME/LOCATION/DESIGNATION,COMPANY,PACKAGE/INDUSTRY/QUALIFICATION\"

You may please resend your resume if not sent in this format.

Warm Regards,
Recruitment Team
IAPL Institute (www.iaplinstitute.com)
Ph:+91 99746 95517
Add:- 157, 1st Floor, Camp Sadar Bazar, Ahmedabad, Gujarat – 380004, INDIA
",
            );            
        }elseif($email_info['type'] == 'enquiry'){
            $response = array(
'subject' => "Thank you for contacting us",
'message' => "
Hi ".$email_info['name'].",

Thanks so much for reaching out! This auto-reply is just to let you know…
We received your email and will get back to you with a response as soon as possible. During 10 AM to 7PM IST that’s usually within a couple of hours. Evenings and weekends may take us a little bit longer.
If you have any additional information that you think will help us to assist you, please feel free to reply to this email.

We look forward to chatting soon!

Cheers,
IAPL Institute (www.iaplinstitute.com)
Ph:+91 99746 95517
Add:- 157, 1st Floor, Camp Sadar Bazar, Ahmedabad, Gujarat – 380004, INDIA
",
            );            
        }
        return $response;
    }
}
/*---------------------------------------------------------------------------
END DOCUMENT UPLOAD SECTION
----------------------------------------------------------------------------*/
