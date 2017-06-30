<?php

$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$data = 'status_page';
$sSetting['refresh'] = "10000";

$connection = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($connection, $data) or die(mysqli_error());
//Template options: "default" and "dark"
$template = "./templates/dark/";
$index = $template . "index.php";
?>