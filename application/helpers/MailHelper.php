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
		$body = '<!DOCTYPE html>
				<html lang="en">
				<head>
				    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
				    <title>' . html_escape($SUBJECT) . '</title>
				    <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
				    <style type="text/css">
				        body {
				            font-family: 'Raleway', sans-serif;
				            font-size: 16px;
				        }

					table, th, td{
				            border: 1px dotted;
					}
				    </style>
				</head>
				<body>
					<h4>Contact request has been submitted to MDF Productions, please check the details below.</h4>
				    	<table cellspacing="0" style="width: 300px; height: 100px; ">
				        <tr>
				            <th>Name</th><td>'.$name.'</td>
				        </tr>
				        <tr >
				            <th>Email</th><td>'.$email.'</td>
				        </tr>
				        <tr>
				            <th>Message</th><td>'.$message.'</td>
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
