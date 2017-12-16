<?php
include 'config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
if (empty($action) || $action == "index.php") {
	echo "Hãy nhập vào một API đúng!";
?>