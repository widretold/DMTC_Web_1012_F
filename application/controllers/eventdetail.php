<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventdetail extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data["page_title"] = "�����.com - �C�x���g�ڍ�";
		
		$this->load->view('header.php',$data);
		$this->load->view('eventdetail/main.php',$data);
		$this->load->view('footer.php',$data);
	}
}