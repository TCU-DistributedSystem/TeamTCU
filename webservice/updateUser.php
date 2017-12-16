<?php
include 'config.php';
$result_final = null;
global $connection;

$id = $_GET['id'];
$username = (isset($_GET['username'])) ? $_GET['username'] : '';
$password = (isset($_GET['password'])) ? password_hash($_GET['password'], PASSWORD_DEFAULT) : '';
$email = (isset($_GET['email'])) ? $_GET['email'] : '';
$status = (isset($_GET['status'])) ? $_GET['role'] : -1;
$role = (isset($_GET['role'])) ? $_GET['role'] : -1;

$sql = "UPDATE users SET ";
if (!empty($email)) $sql.= "email = '".$email."',";
if (!empty($password)) $sql.= "password = '".$password."',";
if (!empty($username)) $sql.= "username = '".$username."',";
if ($status > -1) $sql.= "status = ".$status.",";
if ($role > -1) $sql.= "role = ".$role.",";
$sql = substr($sql, 0, -1);

$sql.=" WHERE id = ".$id;

$result = mysqli_query($connection, $sql);

if ($result) $result_final = true;

echo json_encode($result_final);
die;