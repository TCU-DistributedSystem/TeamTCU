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
        <link href="../css/menu_register.css" rel="stylesheet" type="text/css"/>  
        <SCRIPT LANGUAGE="JavaScript">
            function confirmAction() {
                return confirm("Are you sue!")
            }
        </SCRIPT>
    </head>

    <body>
        <?php
        include './database_connect/connect.php';

        $query = "SELECT
                       *
                        FROM
                        list_room
                         ";

        $result = mysql_query($query);
        if (!$result) { // add this check.
            die('Invalid query: ' . mysql_error());
        }
        ?>
        <table border='1'> 
            <tr> 
                <th rowspan="2" class="bground">ID</th> 
                <th rowspan="2"class="bground">Room's name</th>
                <th colspan="5"class="bground">Numbers</th>
                <th rowspan="2"class="bground">Sound system</th> 
                <th rowspan="2"class="bground">Issue</th> 
                <th rowspan="2"class="bground">Change/Remove</th> 
            </tr>
            <tr>
                <th>Seats</th>
                <th>Screen</th>
                <th>Television</th>
                <th> Board </th>
                <th>Air Conditioner</th>

            </tr>
            <?php
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['nameRoom'] . "</td>";
                echo "<td>" . $row['numOfSeats'] . "</td>";
                echo "<td>" . $row['numOfScreen'] . "</td>";
                echo "<td>" . $row['numOfTV'] . "</td>";
                echo "<td>" . $row['numOfBoard'] . "</td>";
                echo "<td>" . $row['airConditioner'] . "</td>";
                echo "<td>" . $row['soundSystem'] . "</td>";
                echo "<td>" . $row['Issue'] . "</td>";
                echo "<td><li>";
                echo "<a class='change' href='http://localhost/index.php?page=_Changeroom&ID=" . $row['ID'] . "'> Change</a>";
                echo "<a class='delete' onclick=' return confirmAction()' href='index.php?page=_Removeroom&ID=" . $row['ID'] . "'> Remove</a>";
                echo "</li></td>";
                echo "</tr>";
            }
            echo "</table>";

            mysql_close($con);
            ?>

    </body>
</html>
