<?php
ob_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Thêm phòng</title>
  
   <link rel="stylesheet" type="text/css" href="../../../css/css_add_mem.css">

	 </head>


<body>
  <div class="container1">  
  <form id="contact1"  method="post">
   
    <fieldset>
      <input name="room_name" placeholder="Room's name" type="text" tabindex="1" required>
    </fieldset>
	
    <fieldset>
        <input name="numofseat" placeholder="Number of  seats" type="number" tabindex="2" required>
    </fieldset>
	
    <fieldset>
      <input name="numofscreens" placeholder="Number of  screens " type="number" tabindex="3" required>
    </fieldset>
	
    <fieldset>
      <input name="numoftv" placeholder="Number of  TV" type="number" tabindex="2" required>
    </fieldset>
	
    <fieldset>
      <input name="numofboard" placeholder="Number of Boards" type="number" tabindex="3" required>
    </fieldset>
      <fieldset>
      <input name="aircnditioner" placeholder="Number of air conditioner" type="number" tabindex="3" required>
    </fieldset>
      <fieldset>
      <input name="soundsys" placeholder="Kind of sound system" type="text" tabindex="3" required>
    </fieldset>
      <button name="addroom" type="submit" id="contact-submit">ADD</button>
    </fieldset>
  </form>
</div>
</body>	 
</html>


