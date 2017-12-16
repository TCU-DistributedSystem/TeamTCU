<?php
// Cấu hình
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'unleashe_hotel');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
	die("Can't connect to ".DB_HOST);
}