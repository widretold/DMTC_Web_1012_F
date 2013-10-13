<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this -> load -> model('User_model','user');
		$this -> load -> model('Event_model','event');
		$user_id = $this->session->set_userdata('user_id');
		
 		$data = "";
 		$eventlist = $this -> event -> get_event_list();
 		
 		$i = 1;
 		foreach($eventlist as $event_id){
 			$data['event_' + $i + '_title'] = $this -> event -> get_event_title($event_id);
 			$data['event_' + $i + '_img'] = $this -> event -> get_event_img($event_id);
 			$data['event_' + $i + '_start_time'] = $this -> event -> get_event_start_time($event_id);
 			$data['event_' + $i + '_end_time'] = $this -> event -> get_event_end_time($event_id);
 			$data['event_' + $i + '_atendant'] = $this -> event -> get_event_atendant($event_id);
 			$data['event_' + $i + '_capacity'] = $this -> event -> get_event_capacity($event_id);
 			$data['event_' + $i + '_walk'] = $this -> event -> get_event_walk($event_id);
 			$i++;
 		}
 		
 		$data['page_title'] = '卓飲み.com トップページ';
 		$data['user_img'] = $this -> user -> get_User(user_id);
 		$data['user_name'] = $this -> user -> get_User(user_id);
 		
 		/*
 		$taglist = $this -> user -> get_top_tags();
 		$i = 0;
 		foreach($taglist as $tag){
 			$data['tag' + $i] = $tag;
 			$i++;
 		}
 		*/
		
		$this->load->view('header.php',$data);
		$this->load->view('home/main.php',$data);
		$this->load->view('footer.php',$data);
	}
}