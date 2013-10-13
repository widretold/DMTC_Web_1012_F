<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

function __construct() {
parent::__construct();
}

public function index() {
$this->load->library('session');
$this->load->helper('url');

if( $this->session->userdata('username') == 'ユーザ名' &&
$this->session->userdata('password') == 'パスワード' ) {
$this->session->set_userdata('auth_status', 'OK');
redirect( $this->session->userdata('ACK') );
} else {
redirect(login);
}
}
}