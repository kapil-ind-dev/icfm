<?php

function isInt($str) {
	return preg_match("/^[1-9][0-9]*$/", $str);
}

function sendEmail($to,$subject,$message,$attachment=null,$cc_mail=null)
 {
    $email = \Config\Services::email();
    $email->setTo($to);
    if($cc_mail){
        $email->setCC($cc_mail);
    }
    $email->setSubject($subject);
    $email->setMessage($message);
    
    if($attachment){
        $email->attach($filename);
    }
    
    if($email->send())
	{
		return "mail sent";
	}
	else
	{
		return "failed";
	}
    // $email->printDebugger(['headers']);
}