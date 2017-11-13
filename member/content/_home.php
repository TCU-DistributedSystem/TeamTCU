<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh Sach phong hop</title>
        <link href="../css/table.css" rel="stylesheet" type="text/css"/>
        <script>
        
        
        </script>
    </head>
    <body>
<?php
$sql="SELECT fullName FROM `meetingroom_user` WHERE username ='".$_SESSION["username"]."'";
$result =mysql_query($sql);
$fullname = mysql_fetch_assoc($result);

echo "<table border='1' style='font-size:150%'>
 <tr> 
 <th >ID</th>
 <th >Meeting Date</th> 
 <th >Meeting Time</th>
 <th >Meeting Duration</th>
 <th >Room's Name</th>
  <th>Created Date Time</th>
  </tr>"; 
date_default_timezone_set('Asia/Ho_Chi_Minh');
$today =date("Y:m:d");          
$result = mysql_query("SELECT * FROM dsphongdadat where MeetingDate >='".$today."'  and fullName='".$fullname['fullName']."' order by ID"); 
while($row = mysql_fetch_assoc($result))
   {    echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['MeetingDate'] . "</td>";
             echo "<td>" . $row['TimeStart'] . "</td>";  
             echo "<td>" . $row['NameMD'] . "</td>";
            echo "<td>" . $row['nameRoom'] . "</td>";
             echo "<td>" . $row['DateCreated'] . "</td>"; 
             echo "</tr>";
} echo "</table>"; 
 
mysql_close($con); ?>
</body>
</html>
