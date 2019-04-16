<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MailHelper{
	
	public static function sendMail($mail, $mailFrom, $mailTo){
		
		$SUBJECT = "From MDF Productions: Contact Request has been submitted.";
		// Submitted form data
		$name   = $_POST['name'];
		$email  = $_POST['email'];
		$message= $_POST['message'];
		
		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
				    <title>' . html_escape($SUBJECT) . '</title>
				    <style type="text/css">
				        body {
				            font-family: Arial, Verdana, Helvetica, sans-serif;
				            font-size: 16px;
				        }
				    </style>
				</head>
				<body>
					<h4>Contact request has been submitted to MDF Productions, details are given below.</h4>
				    <table cellspacing="0" style="width: 300px; height: 200px;">
				        <tr>
				            <th>Name:</th><td>'.$name.'</td>
				        </tr>
				        <tr style="background-color: #e0e0e0;">
				            <th>Email:</th><td>'.$email.'</td>
				        </tr>
				        <tr>
				            <th>Message:</th><td>'.$message.'</td>
				        </tr>
				    </table>
				</body>
				</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);
		
		$result = $mail->email
		->from($mailFrom)
		->to($mailTo)
		->subject($SUBJECT)
		->message($body)
		->send();
		
		return $result;
	}
}

?>