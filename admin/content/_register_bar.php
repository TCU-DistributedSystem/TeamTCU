<?php

echo'
<div> <form method="Post">';
echo'
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./jquery/menu_register.js"></script>
        </head>
         <body>';
echo '<ul id="main_menu"> <li class="top_menu"> ';

include './menu_child/date.php';
include './database_connect/connect.php';
include './menu_child/_show_room.php';
echo "</div></ul> </li> ";

echo '<li class="top_menu" ">
            <a href="#">Choose time start</a>';
echo "<ul><div id='box1'>";
include './menu_child/time.php';
include './menu_child/duration.php';
echo '<li class="top_menu" ">';
echo "<input id='register' type='submit' name='dangky' value='Register'>";
echo "</ul></body>";
echo "  </form> </div>"
?>
