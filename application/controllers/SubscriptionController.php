<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// Local setting
 require_once('../mdfprod888/application/helpers/MailHelper.php');
// Production settion
//require_once('../site/application/helpers/MailHelper.php');

class SubscriptionController extends CI_Controller {

	public function subscribeYoga()
	{
		log_message('info', 'Call subscribeYoga >> ' . $_POST['serviceType'] . " >> " . $_POST['date']);
		$data = array();
		$data['status'] = 'INVALID_REQ';
		$serviceType = $_POST['serviceType'];
		if(isset($_POST['subscriptionForm']) 
				&& isset($_POST['serviceType']) 
				&& ($serviceType == '1' || ($serviceType == '0' && isset($_POST['date']))) 
				&& isset($_POST['name'])  && isset($_POST['contactNumber']) 
				&& isset($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
				&& isset($_POST['message'])){
			
			log_message('info', 'Retrieve post data.');
			
			/*
			 * Send email to admin
			 */
			$to     = 'info@mdfprod888.com';
			$subject= 'Contact Request Submitted';
			
			// Send email
			$this->load->library('email');
			if(MailHelper::sendMailSubscription($this, $to, $to)){
				$data['status'] = 'OK';
			}else{
				$data['status'] = 'ERR';
			}
			
			// Output status
			echo json_encode($data);
			log_message('info', 'End subscribeYoga');
		}
	}
}
