<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// Local setting
 require_once('../mdfprod888/application/helpers/MailHelper.php');
// Production settion
//require_once('../site/application/helpers/MailHelper.php');

class MdfProdMailController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function doMail()
	{
		if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){
			
			// Submitted form data
			$name   = $_POST['name'];
			$email  = $_POST['email'];
			$message= $_POST['message'];
			
			/*
			 * Send email to admin
			 */
			$to     = 'info@mdfprod888.com';
			$subject= 'Contact Request Submitted';
			
			$data = array();
			
			// Send email
			$this->load->library('email');
			if(MailHelper::sendMail($this, $to, $to)){
				$data['status'] = 'OK';
			}else{
				$data['status'] = 'ERR';
			}
			
			// Output status
			echo json_encode($data);
		}
	}
	
}
