<?php
include 'config.php';
$result_final = null;
global $connection;


$sql = "SELECT * FROM users";
	$result = mysqli_query($connection, $sql);
	if ($result) {
		$arr = [];
		$i = 0;
		while ($item = mysqli_fetch_assoc($result)) {
			foreach($item as $key => $value){
				$arr[$i][$key] = $value;
			}
			$i++;
		}
		$result_final = $arr;
	}


echo json_encode($result_final);
die;