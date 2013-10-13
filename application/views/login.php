<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>

<?php

$this->load->helper('form');

echo form_open('login/login_exe');

echo form_label('username: ', 'username');
$data = array('name' => 'username', 'id' => 'username', 'size' => '25');
echo form_input($data);
echo "<br>";

echo form_label('password: ', 'password');
$data = array('name' => 'password', 'id' => 'password', 'size' => '25');
echo form_input($data);
echo "<br>";

echo form_submit('submit', 'login');
echo "<br>";

echo form_close();
?>

</body>
</html>