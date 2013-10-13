<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data["page_title"] = "‘ìˆù‚Ý.com - V‹K“o˜^";
		$this->load->view('header.php',$data);
		$this->load->view('signup/main.php',$data);
		$this->load->view('footer.php',$data);
	}
}