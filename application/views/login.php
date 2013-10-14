<!DOCTYPE html>
<html lang='ja-JP'>
<head>
<meta charset="utf-8">
<title>login</title>
</head>
<STYLE type="text/css">
<!--
#header {
  color: white;
  background-color: #87CEEB;
}
#sample{
	white-space: pre;	
}
-->
</STYLE>
<body>
<p id="header">宅飲み.com
</p>
<p align="center">パスワード

<?php

$this->load->helper('form');

echo form_open('login/login_exe');

echo form_label('学籍番号', 'username');
$data = array('name' => 'username', 'id' => 'username', 'size' => '25');
echo form_input($data);
echo "<br>";

echo form_label('パスワード ', 'password');
$data = array('name' => 'password', 'id' => 'password', 'size' => '25');
echo form_input($data);
echo "<br>";

echo form_submit('submit', 'login');
echo "<br>";

echo form_close();
?>

</body>
</html>