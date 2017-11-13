<?php
$username = "root";
$password = "" ; $hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die(mysql_error());

//select a database to work 
$db = "unleashe_hotel";
$selected = mysql_select_db($db,$dbhandle) 
  or die(mysql_error());


?>