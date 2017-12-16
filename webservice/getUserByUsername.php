<?php
include 'config.php';
$result_final = null;
global $connection;

$username = $_GET['username'];

$sql = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_array($result);
	$result_final = $user;
}

echo json_encode($result_final);
die;