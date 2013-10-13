<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class MY_Controller extends CI_Controller{
		public	function __construct(){
			parent::__construc();
			if($this->session->userdata('login')!='OK'){
				redirect('/auth/login/');
			}
		}
	}
?>