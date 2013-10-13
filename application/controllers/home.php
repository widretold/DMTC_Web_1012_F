<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home/main.php');
		$this->load->view('footer.php');
	}
}