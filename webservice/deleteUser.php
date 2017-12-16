<?php
include 'config.php';
$result_final = null;
global $connection;

$id = $_GET['id'];

global $connection;
$sql = "DELETE FROM users WHERE id = ".$id;
$result = mysqli_query($connection, $sql);

if ($result) $result_final =true;

echo json_encode($result_final);
die;