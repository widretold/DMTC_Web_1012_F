<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this -> load -> model('User','user');
		$this -> load -> model('Event','event');
		$user_id = $this->session->set_userdata('user_id');
		
		$user_id = 1;
		
		/***********************************************
		**********   Loading UserProfile     ***********
		************************************************/
		
		$myprofile = $this -> user -> getUser($user_id);
 		//var_dump($myprofile);
 		
 		$data['user_name'] = $myprofile -> name;
 		$data['user_img']  = $myprofile -> image_url;
 		
		/***********************************************
		**********   Loading EventList       ***********
		************************************************/
		
		$event_list_amount = 9;
		//$eventlist = $this -> event -> getEvent_list($event_list_amount);
		$eventlist = $this -> event -> new_Event($event_list_amount);
		$event_title_array = array();
		$event_img_array = array();
		foreach($eventlist as $eventInfo){
			$event_title_array[] = $eventInfo -> title;
			$event_img_array[] = $eventInfo -> img;
		}
		$data['event_array_amount'] = $event_list_amount;
 		$data['event_title_array'] = $event_title_array;
 		$data['event_img_array'] = $event_img_array;
 		
 		/**********************************************
 		*********   Load Test FOR TEST USE     ********
 		**********************************************/
 		$event_id = 1;
		$eventInfo = $this -> event -> getEvent($event_id);
		$data['event_title'] = $eventInfo->title;
 		$data['event_img'] = $eventInfo->image_url;
 		
 		
 		
 		/***********************************************
		**********      Load Tag     *******************
		***********************************************/
		$data['tags'] = $this -> event -> getTags(10);
 		
 		
 		
 		/***********************************************
 		**********      Load View    *******************
 		***********************************************/
 		
 		$data['page_title'] = '卓飲み.com トップページ';
		$this->load->view('header.php',$data);
		$this->load->view('home/main.php',$data);
		$this->load->view('footer.php',$data);
		
		
	}
}