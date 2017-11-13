<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh Sach phong hop</title>
        <link href="../css/table.css" rel="stylesheet" type="text/css"/>
         <SCRIPT LANGUAGE="JavaScript">
            function confirmAction() {
                return confirm("Are you sue!")
            }
        </SCRIPT>
    </head>
    <body>
<?php


echo "<table border='1'>
 <tr> 
 <th class='menu'><a href='index.php?page=_list_registed_manager&content=ID'>ID</a></th>
 <th class='menu'><a href='index.php?page=_list_registed_manager&content=MeetingDate'>Meeting Date</a></th> 
 <th class='menu'><a href='index.php?page=_list_registed_manager&content=TimeStart'>Meeting Time</a></th>
 <th class='menu'><a href='index.php?page=_list_registed_manager&content=NameMD'>Meeting Duration</a></th>
 <th class='menu'><a href='index.php?page=_list_registed_manager&content=nameRoom'>Room's Name</a></th>
  <th class='menu'><a href='index.php?page=_list_registed_manager&content=fullName'>Create By Member</a></th>
  <th class='menu'><a href='index.php?page=_list_registed_manager&content=DateCreated'>Created Date Time</a></th>
  <th class='menu'><a href='#'>Delete</a></th>
  </tr>"; 
switch (filter_input(INPUT_GET, 'content'))
{case "ID": {$order = "ID, MeetingDate ,  TimeStart  , NameMD  , nameRoom  ,  fullName  , DateCreated";    break;}
case "MeetingDate":{ $order = "MeetingDate ,  ID ,  TimeStart ,  NameMD  , nameRoom  ,  fullName  , DateCreated"; break;}
case "TimeStart":{ $order = "TimeStart ,  ID  , MeetingDate,   NameMD ,  nameRoom ,   fullName  , DateCreated"; break;}
case "NameMD":{ $order = "NameMD    , ID ,MeetingDate  , TimeStart  ,  nameRoom ,   fullName  , DateCreated"; break;}
case "nameRoom":{ $order = "nameRoom    ,  ID ,MeetingDate ,  TimeStart ,  NameMD   ,  DateCreated"; break;}
case "fullName": {$order = "fullName  ,  ID,  MeetingDate  , TimeStart  , NameMD  , nameRoom  ,  DateCreated"; break;}
case "DateCreated":{ $order = "DateCreated  ,  ID  , MeetingDate  , TimeStart  , NameMD ,  nameRoom   , fullName"; break;}
}           
$result = mysql_query("SELECT * FROM dsphongdadat  order by " .$order); 
while($row = mysql_fetch_assoc($result))
   {    echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['MeetingDate'] . "</td>";
             echo "<td>" . $row['TimeStart'] . "</td>";  
             echo "<td>" . $row['NameMD'] . "</td>";
            echo "<td>" . $row['nameRoom'] . "</td>";
             echo "<td>" . $row['fullName'] . "</td>"; 
             echo "<td>" . $row['DateCreated'] . "</td>"; 
             echo "<td><a onclick='return confirmAction()'href='index.php?page=_Removeregisted&ID=" . $row['ID'] . "'>Delete</a></td>"; 
             echo "</tr>";
} echo "</table>"; 
 
mysql_close($con); ?>
</body>
</html>
