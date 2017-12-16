<?php
include 'config.php';
$result_final = null;
global $connection;

$username = $_GET['username'];
$password = password_hash($_GET['password'], PASSWORD_DEFAULT);
$email = $_GET['email'];
$role = (isset($_GET['role'])) ? $_GET['role'] : 1;

$sql = "INSERT INTO users (username, password, email, role) VALUES ('".$username."', '".$password."', '".$email."', ".$role.")";
$result = mysqli_query($connection, $sql);

if ($result) $result_final = true;

echo json_encode($result_final);
die;