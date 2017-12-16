<?php
include 'config.php';
$result_final = null;
global $connection;

$email = $_GET['email'];

global $connection;
	$sql = "SELECT * FROM users WHERE email = '" . $email . "'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) $result_final = true;
	

echo json_encode($result_final);
die;