<?php
include 'config.php';

$username = $_GET['username'];
$password = $_GET['password'];

$result_final = null;

global $connection;
$sql = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_array($result);
	if(!password_verify($password, $user['password'])){
		$result_final = false;
	} else {
		$result_final = true;
	}
} else {
	$result_final = false;
}

echo json_encode($result_final);
die;