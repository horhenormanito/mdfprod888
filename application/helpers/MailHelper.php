<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailHelper{

	/**
	 * Send contact mail
	 * @param unknown $mail
	 * @param unknown $mailFrom
	 * @param unknown $mailTo
	 * @return unknown
	 */
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
				            font-family: "Raleway", sans-serif;
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
	
	/**
	 * Send mail subscription
	 * @param unknown $mail
	 * @param unknown $mailFrom
	 * @param unknown $mailTo
	 * @return unknown
	 */
	public static function sendMailSubscription($mail, $mailFrom, $mailTo){
		
		$randomString = substr(md5(mt_rand()), 0, 7);
		log_message("info", "random string >> " . $randomString);
		$SUBJECT = "From MDF Productions: Subscription Request has been submitted. (".$randomString.")";
		
		// Submitted form data
		$serviceName   = $_POST['serviceName'];
		$name   = $_POST['name'];
		$contactNumber   = $_POST['contactNumber'];
		$email  = $_POST['email'];
		$message= $_POST['message'];
		
		$serviceType   = $_POST['serviceType'];
		$date = "-";
		if ($serviceType == '0'){
			$serviceType = "Session";
			$date   = $_POST['date'];
		}else{
			$serviceType = "Monthly";
		}
		
		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
				    <title>' . html_escape($SUBJECT) . '</title>
				    <style type="text/css">
				        body {
				            font-family: "Raleway", sans-serif;
				            font-size: 16px;
				        }

						tr.op-background{
							background-color: #e0e0e0;
						}
				    </style>
				</head>
				<body>
					<h4>Subscription request has been submitted to MDF Productions, Forwarded details are as follows.</h4>
				    <table cellspacing="0" style="width: 300px; height: 200px;">
						<tr>
				            <th>Service Name:</th><td>'.$serviceName.'</td>
				        </tr>
						<tr class="op-background">
				            <th>Service Type:</th><td>'.$serviceType.'</td>
				        </tr>
						<tr>
				            <th>Date:</th><td>'.$date.'</td>
				        </tr>
				        <tr class="op-background">
				            <th>Name:</th><td>'.$name.'</td>
				        </tr>
						<tr>
				            <th>Contact Number:</th><td>'.$contactNumber.'</td>
				        </tr>
				        <tr class="op-background">
				            <th>Email:</th><td>'.$email.'</td>
				        </tr>
				        <tr>
				            <th>Message:</th><td>'.$message.'</td>
				        </tr>
				    </table>
				</body>
				</html>';
		
		$result = $mail->email
		->from($mailFrom)
		->to($mailTo)
		->subject($SUBJECT)
		->message($body)
		->send();
		
		return $result;
	}
	
	public static function sendMailSpaceRent($mail, $mailFrom, $mailTo){
		
		$randomString = substr(md5(mt_rand()), 0, 7);
		log_message("info", "sendMailSpaceRent:: random string >> " . $randomString);
		$SUBJECT = "From MDF Productions: Space Rental Request has been submitted. (".$randomString.")";
		
		// Submitted form data
		$date   = $_POST['date'];
		$hoursUse   = $_POST['hoursUse'];
		$name   = $_POST['name'];
		$contactNumber   = $_POST['contactNumber'];
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
				            font-family: "Raleway", sans-serif;
				            font-size: 16px;
				        }
				    		
						tr.op-background{
							background-color: #e0e0e0;
						}
				    </style>
				</head>
				<body>
					<h4>Space Rental request has been submitted to MDF Productions, Forwarded details are as follows.</h4>
				    <table cellspacing="0" style="width: 300px; height: 200px;">
						<tr>
				            <th>Service Name:</th><td>Space Rental</td>
				        </tr>
						<tr class="op-background">
				            <th>Date:</th><td>'.$date.'</td>
				        </tr>
						<tr>
				            <th>Hours of Use:</th><td>'.$hoursUse.'</td>
				        </tr>
				        <tr class="op-background">
				            <th>Name:</th><td>'.$name.'</td>
				        </tr>
						<tr>
				            <th>Contact Number:</th><td>'.$contactNumber.'</td>
				        </tr>
				        <tr class="op-background">
				            <th>Email:</th><td>'.$email.'</td>
				        </tr>
				        <tr>
				            <th>Message:</th><td>'.$message.'</td>
				        </tr>
				    </table>
				</body>
				</html>';
		
		$result = $mail->email
		->from($mailFrom)
		->to($mailTo)
		->subject($SUBJECT)
		->message($body)
		->send();
		
		return $result;
	}
	
	/**
	 * 
	 * @param number $length
	 * @return string
	 */
	public static function generateRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}
	
}

?>