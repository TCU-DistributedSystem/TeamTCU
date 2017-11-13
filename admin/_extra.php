
<?php
echo '
<script type="text/javascript" 
src="jquery/min.js"></script>
<script type="text/javascript" src="jquery/ddaccordion.js">
</script>
<script type="text/javascript">
ddaccordion.init({
    headerclass: "expandable", //Shared CSS class name of headers group that are expandable
    contentclass: "categoryitems", //Shared CSS class name of contents group
  
  revealtype: "click", //Reveal content when user clicks or onmouseover 
the header? Valid value: "click", "clickgo", or "mouseover"
    mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
    collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
    defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
    onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
    animatedefault: false, //Should contents open by default be animated into view?
    persiststate: true, //persist state of opened contents within browser session?
  
  toggleclass: ["", "openheader"], //Two CSS classes to be applied to 
the header when it\'s collapsed and expanded, respectively ["class1", 
"class2"]
    togglehtml: ["prefix", "", ""], //Additional HTML added
 to the header when it\'s collapsed and expanded, respectively  
["position", "html1", "html2"] (see docs)
    animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
    oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
        //do nothing
    },
    onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
        //do nothing
    }
})


</script>
<style type="text/css">

.arrowlistmenu{
width: 100%; /*width of accordion menu*/
}

.arrowlistmenu .menuheader{ /*CSS class for menu headers in general (expanding or not!)*/
font: bold 14px Arial;
color: white;
                background-image: -webkit-linear-gradient(top, #0c528e, #008acc, #0c528e);
                background-image: -moz-linear-gradient(top, #0c528e, #008acc, #0c528e);
                background-image: -ms-linear-gradient(top, #0c528e, #008acc, #0c528e);
                background-image: -o-linear-gradient(top, #0c528e, #008acc, #0c528e);
 repeat-x center left;
margin-bottom: 0px; /*bottom spacing between header and rest of content*/
text-transform: uppercase;
padding: 4px 0 4px 10px; /*header text is indented 10px*/
cursor: hand;
cursor: pointer;
}

.arrowlistmenu .openheader{ /*CSS class to apply to expandable header when it\'s expanded*/
background-image: url(http://1.bp.blogspot.com/-jeGIM5duw4Q/T44KL8MhYoI/AAAAAAAAX0M/HTA4YcQE2zY/s1600/titlebar-active.png);
}

.arrowlistmenu ul{ /*CSS for UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
margin-bottom: 8px; /*bottom spacing between each UL and rest of content*/
}

.arrowlistmenu ul li{
padding-bottom: 2px; /*bottom spacing between menu items*/
}

.arrowlistmenu ul li a{
color: #05385f;
background:
 
url(http://4.bp.blogspot.com/-qH3X6Ciy150/T44KFWiC2rI/AAAAAAAAX0E/Rgaqrw2nJd8/s1600/arrowbullet.png)
 no-repeat center left; /*custom bullet list image*/
display: block;
padding: 2px 0;
padding-left: 19px; /*link text is indented 19px*/
text-decoration: none;
font-weight: bold;
border-bottom: 1px solid #0d2ba7;
font-size: 100%;
}

.arrowlistmenu ul li a:visited{
color: ##05385f;
}

.arrowlistmenu ul li a:hover{ /*hover state CSS*/
color: #141415;
background-color: #FFFFFF;
}
.arrowlistmenu .menuheader{
background-color:#1083d8

}
img {
border-radius:20%;
-moz-border-radius:20%;
-webkit-border-radius:20%;
max-height:90px;
}
</style>';
include 'database_connect/connect.php';
$sql="SELECT fullName,avata FROM meetingroom_user WHERE username='".$_SESSION['username']."'";
	$query=mysql_query($sql);
        $result = mysql_fetch_array($query);
        if (strlen($result['avata']) > 1) {
    echo '<img   height="100px" src="data:image/jpeg;base64,' . base64_encode($result['avata']) . '"/>';
}else     echo '<img id="dimg" height="100px"  src="icon/avata.png"/>';
echo '<h2><p class="point">●<big class="name">Hi! '.$result['fullName'].'</big></p></h2>';


echo '

<div class="arrowlistmenu">
<h3 class="menuheader expandable">☆Registering</h3>
<ul class="categoryitems">
    <li><a href="index.php?page=_register_main">+Registing</a></li>
     
</ul>
<h3 class="menuheader expandable">☆Database Management</h3>
<ul class="categoryitems">
    <li><a href="index.php?page=_add_room">+New room</a></li>
    <li><a href="index.php?page=_add_member">+New member</a></li>
    <li><a href="index.php?page=_list_room_manager">List rooms</a></li>
    <li><a href="index.php?page=_list_user_manager">List members</a></li>      
</ul>

<h3 class="menuheader expandable">☆Account</h3>
<ul class="categoryitems">
        <li><a href="index.php?page=_account_info">Account infomation</a></li>
        <li><a href="account/logout.php">Log out</a></li>
  

</ul>';

include 'src/_checkdata.php'; 
include 'src/_add_room.php';
include 'src/_add_member.php';
include 'src/_edit_account.php';
include 'src/_register_detail.php';
include 'src/_changeroom.php';
include 'src/_Changemem.php';

echo' </div>';


