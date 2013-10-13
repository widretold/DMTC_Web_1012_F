<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct() {
parent::__construct();
}

public function index()
{
$this->load->view('login');
}

function login_exe(){
$this->load->helper('url');
$this->load->library('session');

$this->session->set_userdata('username', $this->input->post('username'));
$this->session->set_userdata('password', $this->input->post('password'));

redirect('auth');
}

}