<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require_once('../ci/application/helpers/MailHelper.php');

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
		$this->load->library('email');
		$mailAddrFrom = $this->input->post('u_email');
		MailHelper::sendMail($this, $mailAddrFrom, $mailAddrFrom);
		$this->load->view('mdf_prod_index');
	}
}
