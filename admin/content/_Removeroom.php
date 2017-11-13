
<?php

$sql= "DELETE FROM `list_room` WHERE ID =".$_GET['ID'];
$result = mysql_query($sql); 
 $sql="SELECT ID FROM list_room WHERE  ID =" .$_GET['ID'];

                    $result = mysql_query($sql); 
		
		if(mysql_num_rows($result) ==0) echo "<script> alert('Delete the room Complete !!!')</script>";
               
  echo "  <script>window.location.replace('index.php?page=_list_room_manager')</script>";
                