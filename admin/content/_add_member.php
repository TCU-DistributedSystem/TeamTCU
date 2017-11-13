<?php
ob_start();
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../../css/css_add_mem.css">
    </head>


    <body>
        <div class="container1">  
            <form id="contact1" action="" method="post"  enctype="multipart/form-data" >

                <fieldset>
                    <input name="fullname" placeholder="Full name" type="text" tabindex="1" required>
                </fieldset>

                <fieldset>
                    <input name="username" placeholder="Username" type="text" tabindex="2" required>
                </fieldset>

                <fieldset>
                    <input name="password" placeholder="Password" type="password" tabindex="3" required>
                </fieldset>

                <fieldset>
                    <input name="authority" placeholder="Admin=1 :: member=2" type="text" tabindex="2" required>
                </fieldset>

                <fieldset>
                    <input name="phonenum" placeholder="Phone numbers" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="Email" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                   <label>Ảnh đại diện </label>
		<input name="image" accept="image/JPEG" type="file">
                </fieldset>
                <fieldset>
                <button name="submit_name" type="submit" id="contact-submit">ADD</button>
                </fieldset>
            </form>
        </div>
    </body>	 

    
</html>


