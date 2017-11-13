
<script>
function go()
{
    window.location.replace('index.php?page=_edit_account');
}

</script>
<style type="text/css">
.btnedit {
	-moz-box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #b8e356), color-stop(1, #a5cc52) );
	background:-moz-linear-gradient( center top, #b8e356 5%, #a5cc52 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#b8e356', endColorstr='#a5cc52');
	background-color:#b8e356;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #83c41a;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:33px;
	line-height:30px;
	width:100px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #86ae47;
}
.btnedit:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #a5cc52), color-stop(1, #b8e356) );
	background:-moz-linear-gradient( center top, #a5cc52 5%, #b8e356 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5cc52', endColorstr='#b8e356');
	background-color:#a5cc52;
}.btnedit:active {
	position:relative;
	top:1px;
}</style>


    <?php 
    
   $sqlcmd=" SELECT * FROM `meetingroom_user` WHERE username ='".$_SESSION['username']."'";
   include './database_connect/connect.php';
   $result = mysql_query($sqlcmd);
             if (!$result) { // add this check.
             die('Invalid query: ' . mysql_error());}
             $row = mysql_fetch_array($result); 


    echo "<style>#size{height:200px;width:50%;   margin: 0 auto; margin-top=50px}</style>";
    echo "<table id='size' border='1'>";

    
        echo "<tr>";
        echo "<th>Full name</th> <td>" . $row['fullName'] . "</td>";
             echo "</tr>"; 
             echo "<tr>"; 
        echo "<th>Username</th><td>" . $row['username'] . "</td>";
          echo "</tr>"; 
             echo "<tr>"; 
        echo "<th>Password</th><td>" . $row['password'] . "</td>";
          echo "</tr>"; 
             echo "<tr>"; 
        echo "<th>Authority</th><td>" . $_SESSION['authority'] . "</td>";
          echo "</tr>"; 
             echo "<tr>"; 
        echo "<th>Phone number</th><td>" . $row['sodienthoai'] . "</td>";
          echo "</tr>"; 
             echo "<tr>"; 
        echo "<th>Email</th><td>" . $row['Email'] . "</td>";
        echo "</tr>"; 
   
    echo "<tr>"; 
        echo"<td colspan='2'><input class='btnedit' id='edit' type='button' value='Edit profile' onclick='go();'/></td>";
        echo "</tr>"; 
    echo "</table>";
   
      