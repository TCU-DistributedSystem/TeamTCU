
<?php

$sql= "DELETE FROM `meetingroom_user` WHERE ID =".$_GET['ID'];
$result = mysql_query($sql); 
 $sql="SELECT ID FROM meetingroom_user WHERE  ID =" .$_GET['ID'];

                    $result = mysql_query($sql); 
		
		if(mysql_num_rows($result) ==0) echo "<script> alert('Delete the user Complete !!!')</script>";
               
  echo "  <script>window.location.replace('index.php?page=_list_user_manager')</script>";
                