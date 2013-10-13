<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tweets extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

    // TODO: 書き込みを表示する（SELECT）
    public function index()
    {
        // TODO: tweetsテーブルの中身を取得する
        // TODO: ブラウザに結果を表示する
    }

    // TODO: 書き込みを行う（INSERT）
    public function create()
    {
        // TODO: tweetを新規作成する
        // TODO: ブラウザに結果を表示する
    }

    // TODO: 書き込みを更新する（UPDATE）
    public function update()
    {
        // TODO: tweetを更新する
        // TODO: ブラウザに結果を表示する
    }

    // TODO: 書き込みを削除する（DELETE）
    public function delete()
    {
        // TODO: tweetを削除する
        // TODO: ブラウザに結果を表示する
    }
}