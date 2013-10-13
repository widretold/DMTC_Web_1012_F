<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

function __construct() {
parent::__construct();
}

public function index() {
	$this->load->library('session');
	$this->load->helper('url');

	if( $this->session->userdata('username') == '7311107' && $this->session->userdata('password') == 'パスワード' ) {
		$this->session->set_userdata('auth_status', 'OK');
		$this->session->set_userdata('user_id',$this->session->userdata('username'));
		redirect( $this->session->userdata('access_uri') );
		} else {
			redirect(login);
		}
	}
}