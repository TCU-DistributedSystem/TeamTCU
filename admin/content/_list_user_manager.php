
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
     include './database_connect/connect.php';

             $query= "SELECT * FROM `meetingroom_user` ";
           
             $result = mysql_query($query);
             if (!$result) { // add this check.
             die('Invalid query: ' . mysql_error());}
             ?>
        <table border='1'> 
            <tr> 
                <th class="bground">ID</th> 
                <th class="bground">Full name</th>
                <th class="bground">Username</th>
                <th class="bground">Authority</th> 
                <th class="bground">Phone numbers</th> 
                <th class="bground">Email</th>     
                <th class="bground">Change/Remove</th> 
            </tr>
           
            <?php
            while($row = mysql_fetch_array($result))   {
                echo "<tr>";   
                echo "<td>" . $row['ID'] . "</td>";   
                echo "<td>" . $row['fullName'] . "</td>";  
                echo "<td>" . $row['username'] . "</td>";   
                echo "<td>"; if( $row['admin'] == 1){echo 'Admin';}elseif ($row['admin']==2) {echo 'Member';} else {echo"Block";}  echo "</td>";   
                echo "<td>" . $row['sodienthoai'] . "</td>";  
                echo "<td>" . $row['Email'] . "</td>";    
                
                 echo "<td><li>";
                echo "<a href='index.php?page=_Changemem&ID=" . $row['ID'] . "'> Change</a>";
                echo "<a  onclick=' return confirmAction()' href='index.php?page=_Removemem&ID=" . $row['ID'] . "'> Remove</a>";
                echo "</li></td>";
                echo "</tr>";  
                } 
                echo "</table>"; 
 
            mysql_close($con);
        ?>
     
    </body>
</html>
