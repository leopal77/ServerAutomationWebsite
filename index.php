<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="css/site.css">
<script src="js/scripts.js"></script>

<body>



</head>
  



<div id="test" class="button">
<img id="myImage" src="resources/pic_bulboff.gif" style="width:10%">

    <form method="post">
    <p>
        <button id="start_button" name="button1">Start</button> 
    </p>
    </form>
        <form method="post">
    <p>
        <button id="shutdown_button" name="button2">Shutdown</button>
    </p>
    </form>
</div>
</body>
<?php
    if (isset($_POST['button1']))
    {
         
         $server_status = shell_exec('/var/www/scripts/wake_dell.sh');
         if($server_status==0)
            {
            echo "Active";
            echo '<script type="text/javascript">',
                'lights();',
               '</script>';
            }


    }
        if (isset($_POST['button2']))
    {
         exec('sudo /var/www/scripts/shutdown.sh');
        
    }
?>
