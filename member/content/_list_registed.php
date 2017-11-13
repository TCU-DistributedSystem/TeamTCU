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
include_once'./database_connect/connect.php';
echo "<table border='1' style ='font-size:100%'>
 <tr> 
 <th class='menu'><a href='index.php?page=_list_registed&content=ID'>ID</a></th>
 <th class='menu'><a href='index.php?page=_list_registed&content=MeetingDate'>Meeting Date</a></th> 
 <th class='menu'><a href='index.php?page=_list_registed&content=TimeStart'>Meeting Time</a></th>
 <th class='menu'><a href='index.php?page=_list_registed&content=NameMD'>Meeting Duration</a></th>
 <th class='menu'><a href='index.php?page=_list_registed&content=nameRoom'>Room's Name</a></th>
  <th class='menu'><a href='index.php?page=_list_registed&content=fullName'>Create By Member</a></th>
  <th class='menu'><a href='index.php?page=_list_registed&content=DateCreated'>Created Date Time</a></th>
  </tr>"; 
switch (filter_input(INPUT_GET, 'content'))
{case "ID": {$order = "ID, MeetingDate ,  TimeStart  , NameMD  , nameRoom  ,  fullName  , DateCreated";    break;}
case "MeetingDate":{ $order = "MeetingDate ,  ID ,  TimeStart ,  NameMD  , nameRoom  ,  fullName  , DateCreated"; break;}
case "TimeStart":{ $order = "TimeStart ,  ID  , MeetingDate,   NameMD ,  nameRoom ,   fullName  , DateCreated"; break;}
case "NameMD":{ $order = "NameMD    , ID ,MeetingDate  , TimeStart  ,  nameRoom ,   fullName  , DateCreated"; break;}
case "nameRoom":{ $order = "nameRoom    ,  ID ,MeetingDate ,  TimeStart ,  NameMD   ,  DateCreated"; break;}
case "fullName": {$order = "fullName   ,  ID,  MeetingDate  , TimeStart  , NameMD  , nameRoom  ,  DateCreated"; break;}
case "DateCreated":{ $order = "DateCreated  ,  ID  , MeetingDate  , TimeStart  , NameMD ,  nameRoom   , fullName"; break;}
}           
$today =date("Y:m:d");          
$result = mysql_query("SELECT * FROM dsphongdadat where MeetingDate >='".$today."'   order by " .$order);  
while($row = mysql_fetch_assoc($result))
   {    echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['MeetingDate'] . "</td>";
             echo "<td>" . $row['TimeStart'] . "</td>";  
             echo "<td>" . $row['NameMD'] . "</td>";
            echo "<td>" . $row['nameRoom'] . "</td>";
             echo "<td>" . $row['fullName'] . "</td>"; 
             echo "<td>" . $row['DateCreated'] . "</td>"; 
             echo "</tr>";
} echo "</table>"; 
 
mysql_close($con); ?>
</body>
</html>
