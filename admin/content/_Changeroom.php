<?php
ob_start();
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Up date</title>

        <link rel="stylesheet" type="text/css" href="../../../css/css_add_mem.css">

    </head>


    <body>
        <div class="container1">  
            <form id="contact1"  method="post">
                <?php
                $sqlcmd = " SELECT * FROM `list_room` WHERE ID =" . $_GET['ID'];
                include './database_connect/connect.php';
                $result = mysql_query($sqlcmd);
                if (!$result) { // add this check.
                    die('Invalid query: ' . mysql_error());
                }
                $row = mysql_fetch_array($result);
                ?>
                <form method="POST">
                    <p>Room's name</p>
                    <input name="room_name" placeholder="Room's name" type="text" tabindex="1" required value="<?php echo $row['nameRoom']; ?>">
                    <p>Number of seats</p>
                    <input name="numofseat" placeholder="Number of  seats" type="number" tabindex="2" required value="<?php echo $row['numOfSeats']; ?>">
                    <p>Number of screens</p>
                    <input name="numofscreens" placeholder="Number of  screens " type="number" tabindex="3" required value="<?php echo $row['numOfScreen']; ?>">
                    <p>Number of TV</p>
                    <input name="numoftv" placeholder="Number of  TV" type="number" tabindex="2" required value="<?php echo $row['numOfTV']; ?>">
                    <p>Number of Boards</p>
                    <input name="numofboard" placeholder="Number of Boards" type="number" tabindex="3" required value="<?php echo $row['numOfBoard']; ?>">
                    <p>Number of air conditioner</p>
                    <input name="aircnditioner" placeholder="Number of air conditioner" type="number" tabindex="3" required value="<?php echo $row['airConditioner']; ?>">
                    <p>Kind of sound system</p>
                    <input name="soundsys" placeholder="Kind of sound system" type="text" tabindex="3" required value="<?php echo $row['soundSystem']; ?>">
                    <p>Status</p>
                    <input name="issue" placeholder="active = 1:: block = 0" type="number" tabindex="3" required value="<?php echo $row['Issue']; ?>">

                    <button name="changeroom" type="submit" id="contact-submit">Change</button>
                </form>
            </form>
        </div>
    </body>	 
</html>


