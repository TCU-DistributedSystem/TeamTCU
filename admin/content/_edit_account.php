<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../../css/css_add_mem.css">
    </head>
<?php
$sqlcmd=" SELECT * FROM `meetingroom_user` WHERE username ='".$_SESSION['username']."'";
   include './database_connect/connect.php';
   $result = mysql_query($sqlcmd);
             if (!$result) { // add this check.
             die('Invalid query: ' . mysql_error());}
             $row = mysql_fetch_array($result); 
?>

    <body>
        <div class="container1">  
            <form id="contact1" action="" method="post" enctype="multipart/form-data">

                <fieldset>
                Name    <input name="fullname" placeholder="Full name" type="text" tabindex="1" required value="<?php echo $row['fullName']; ?>">
                </fieldset>

                <fieldset>
                 Username   <input name="username" placeholder="Username" type="text" tabindex="2" required  value="<?php echo $row['username'] ;?>">
                </fieldset>
                 <fieldset>
              Current password   <input name="password" placeholder="Password" type="password" tabindex="3" required >
                </fieldset>
                <fieldset>
                    Password   <input name="newpassword" placeholder="Password" type="password" tabindex="3" required value="<?php echo $row['password'] ;?>">
                </fieldset>
                <fieldset>
                 Confirm Password   <input name="confirmpassword" placeholder="Password" type="password" tabindex="3" required value="<?php echo $row['password'] ;?>">
                </fieldset>
                <fieldset>
               Phone number     <input name="phonenum" placeholder="Phone numbers" type="text" tabindex="3" required value="<?php echo $row['sodienthoai'] ;?>">
                </fieldset>
                <fieldset>
                 Email   <input name="email" placeholder="Email" type="text" tabindex="3" required value="<?php echo $row['Email'] ;?>">
                </fieldset>
                <fieldset>
                   <label>Ảnh đại diện </label>
		<input name="image" accept="image/JPEG" type="file">
                </fieldset>
                 <fieldset>
                <button name="edit" type="submit" id="edit">Edit</button>
                </fieldset>
            </form>
        </div>
    </body>	 

    
</html>


