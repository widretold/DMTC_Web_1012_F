<?php
class Event_model extends CI_Model {

    var $name   = '';
    var $number = 0;
    var $mail = '';
    var $sex = '';
    var $grade = 0;
    var $circle = '';
    var $passward = '';
    var $tags = '';
    var $image_url = '';
    var $event_id = 0;
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();
    }
    
    function get_username($number)
    {
        $query = $this -> db -> get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // 下の Note を参照してください
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
