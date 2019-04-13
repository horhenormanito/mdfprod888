<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MailHelper{
	
	public static function sendMail($mail, $mailFrom, $mailTo){
		$SUBJECT = "Inquiry from www.mdfprod888.com";
		$message = '<p>This message has been sent for testing purposes.</p>';
		
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
				' . $message . '
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
		
		var_dump($result);
		echo '<br />';
		echo $mail->email->print_debugger();
	}
}

?>