<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data["page_title"] = "卓飲み.com - 新規登録 Step0";
		$this->load->view('header.php',$data);
		$this->load->view('signup/index.php',$data);
		$this->load->view('footer.php',$data);
	}
	
	public function step1()
	{
		$address = $this -> input -> post('address', TRUE);
		$data["page_title"] = "卓飲み.com - 新規登録 Step1";
		
		/******************************************************
		********************   Sending Email ******************
		******************************************************/
		
		$this->load->library('email');
		
		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('someone@example.com'); 
		$this->email->cc('another@another-example.com'); 
		$this->email->bcc('them@their-example.com'); 
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	
		$this->email->send();
		echo $this->email->print_debugger();		
		
		/******************************************************
		*******************   Load Email **********************
		******************************************************/
		
		$this->load->view('header.php',$data);
		$this->load->view('signup/step1.php',$data);
		$this->load->view('footer.php',$data);
	}
}