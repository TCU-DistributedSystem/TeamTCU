
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../../css/css_add_mem.css">
        <link rel="stylesheet" href="css/smoothness.css">
        <script src="../../../jquery/min.js"></script>
        <script src="../../../jquery/j_UI_min.js"></script>
        <style>
            #datepicker
            {background-image: url("./icon/calendar.png");
             background-repeat: no-repeat; 
             background-position: 0px;
             background-size: 13%;
             padding-left:27px;
             width:135px;
            }
        </style>
    </head>
 
    <?php include './database_connect/connect.php'; ?>
    <body >
        <div class="container1">  
            <form id="contact1" action="" method="post" >

                <fieldset style='font-size: 200%'>
                    Meeting date *
                    <?php echo'
        
                            <html>
                            <head>
                            <link rel="stylesheet" href="css/smoothness.css">
                            <script src="jquery/min.js"></script>
                            <script src="jquery/j_UI_min.js"></script>

                                <script>
                              $(document).ready(function() {
                                $("#pickmeetingdate").datepicker();
                              });
                            </script>';

                    echo "<input style='background-image: url('./icon/calendar.png');
                            background-repeat: no-repeat; 
                            background-position: 0px;
                            background-size: 13%;
                            padding-left:27px;
                            width:135px'
                             id='pickmeetingdate' type='Text'
                          name='datefrom' 
                          style='margin-top:5px;margin-bottom:-10px; height:25px' 
                               placeholder='Choose a date' required
        />"; ?>
                </fieldset>
 <fieldset style='font-size: 200%'>
                    To  <?php echo'
        
                            <html>
                            <head>
                            <link rel="stylesheet" href="css/smoothness.css">
                            <script src="jquery/min.js"></script>
                            <script src="jquery/j_UI_min.js"></script>

                                <script>
                              $(document).ready(function() {
                                $("#pickmeetingdateto").datepicker();
                              });
                            </script>';

                    echo "<input style='background-image: url('./icon/calendar.png');
                        background-repeat: no-repeat; 
                        background-position: 0px;
                        background-size: 13%;
                        padding-left:27px;
                        width:135px'
                         id='pickmeetingdateto' type='Text'
                        name='dateover' 
                         style='margin-top:5px;margin-bottom:-10px; height:25px' 
                        placeholder='Choose a date over'
                        />";?>
                </fieldset>
                <fieldset style='font-size: 200%'>
                    <div style="float:left; width:50%">    <div>Meeting time *</div>
                    <?php
                    echo '<select name="timestart" >';
                    $result = mysql_query("SELECT * FROM meetingroom_time_start order by ID");
                    while ($row = mysql_fetch_array($result)) {
                        echo " <option value='" . $row['ID'] . "'>" . $row['TimeStart'] . "</option>";
                    }
                    unset($row);unset($result);
                    echo' </select></div> ';
                    
                    
                    ?>
                        <div style="float:right; width:50%">   <div>  Meeting duration * </div>   
                    <?php
                    echo '<select name="duration" >';
                    $result = mysql_query("SELECT * FROM meetingroom_duration order by ID");
                    while ($row = mysql_fetch_array($result)) {
                        echo " <option value='" . $row['ID'] . "'>" . $row['NameMD'] . "</option>";
                    }
                    unset($row);unset($result);
                    echo' </select></div> ';
                    
                    
                    ?>
                </fieldset>
                <fieldset style='font-size: 200%' >
                Meeting room *     <?php
                    echo '<select name="room">';
                    $result = mysql_query("SELECT * FROM list_room order by ID");
                    while ($row = mysql_fetch_array($result)) {
                        echo " <option value='" . $row['ID'] . "'>" . $row['nameRoom'] . "</option>";
                    }
                    echo' </select>';
                    ?>
                </fieldset>
               

                <fieldset style='font-size: 200%'>
                <button name="regisrer_detail" type="submit" id="regisrer_detail-submit">Register now</button>
                </fieldset>
            </form>
        </div>
    </body>	 


</html>


