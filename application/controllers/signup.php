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
		
		$number = $this -> input -> post('number', TRUE);
		$number = "12345";
		
		$data["page_title"] = "卓飲み.com - 新規登録 Step1";
		$address = 'j' . $number . '@ed.tus.ac.jp';
		$data["address"] = $address;
		
		/******************************************************
		********************   Add Detabase ******************
		******************************************************/
				
		//$this -> load -> model('P_User','temp');
		$userInfo = array();
		$userInfo['number'] = $number;
		$interval = 60*60*24;
		$userInfo['date'] = time() + $interval;
		
		//creating Key
		$key="";
		$strinit = "abcdefghkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ012345679"; 
		$strarray = preg_split("//", $strinit, 0, PREG_SPLIT_NO_EMPTY); 
		for ($i = 0, $str = null; $i < 10; $i++) { 
			$key .= $strarray[array_rand($strarray, 1)]; 
		}
		
		//FOR TEST
		$key = "YgWQehFHK6";
		 
		$userInfo['key'] = $key;
		
		
		//$this -> temp -> storeUser($userInfo);
		
		/*Test Code
		echo 'Here is Test|';
		echo $number;
		echo '|';
		echo (time() + $interval);
		echo '|';
		echo $key;
		*/
		
		
		/******************************************************
		********************   Send Email    ******************
		******************************************************/
		$url = 'http://localhost/DMTC_Web_1012_F/index.php/signup/step2?key='.$key.'&num='.$number;
		
		$body = '下のリンクをクリックして、次のステップへ進んでください。';
		$body .= '<a href="'.$url.'">次のステップへ</a>';
		
		$this->load->library('email');
		$this->email->from('your@example.com', 'Your Name');
		$this->email->to($address); 
		$this->email->cc('another@another-example.com'); 
		$this->email->bcc('them@their-example.com'); 
		$this->email->subject('新規会員登録');
		$this->email->message($body);	
		$this->email->send();
		//echo $this->email->print_debugger();
		echo '|';
		echo $address;
		echo '|';
		echo $body;
		echo '|';		
		
		/******************************************************
		*******************   Load Views **********************
		******************************************************/
		
		$this->load->view('header.php',$data);
		$this->load->view('signup/step1.php',$data);
		$this->load->view('footer.php',$data);
			
	}
	
	public function step2()
	{
		$data["page_title"] = "卓飲み.com - 新規登録 Step2";
		
		$number = $this -> input -> get('num',TRUE);
		$recieved_key = $this -> input -> get('key',TRUE);
		
		//$this -> load -> model('U_Pass','temp');
		//$key = $this -> temp -> getUser($number);
		
		//FOR TEST USE
		$key = "YgWQehFHK6";
		
		
		if($key == $recieved_key){
			$this->load->view('header.php',$data);
			$this->load->view('signup/step2.php',$data);
			$this->load->view('footer.php',$data);
		}else{
			$this->load->view('header.php',$data);
			$this->load->view('signup/error.php',$data);
			$this->load->view('footer.php',$data);
		}
	}
	
	public function step3()
	{
		$data["page_title"] = "卓飲み.com - 新規登録 Step3";
		
		$this->load->view('header.php',$data);
		$this->load->view('signup/step3.php',$data);
		$this->load->view('footer.php',$data);
		
	}
	
	public function end()
	{
		$data["page_title"] = "卓飲み.com - 新規登録 登録完了";
		
		$this->load->view('header.php',$data);
		$this->load->view('signup/end.php',$data);
		$this->load->view('footer.php',$data);
		
	}
}