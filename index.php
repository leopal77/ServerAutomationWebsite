<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="css/site.css">
<script src="js/scripts.js"></script>

<body>



</head>
  


<div class="light">
    <img id="myImage"  src="resources/pic_bulboff.gif" height="120" >
</div>
 <div class="spinner" id="loading">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
<div id="test" class="middle">

    <div class="button">
 
        <form method="post">
        <p>
            <button id="shutdown_button" name="button2">Shutdown</button>
        </p>
        </form>              
        <form method="post">
        <p>
            <button id="start_button" name="button1">Start</button> 
        </p>
        </form>
    </div>

</div>
</body>
<?php
    if (isset($_POST['button1']))
    {
        $server_status=1;
        while($server_status)
        {

             $server_status = shell_exec('/var/www/scripts/wake_dell.sh');

             if($server_status==0)
                {
                echo "Active";
                echo '<script type="text/javascript">',
                    'lights();',
                   '</script>';
                }
                else
                {
                echo '<script type="text/javascript">',
                    'var load=document.getElementById("loading");',
                    'load.style.display="block";',
                   '</script>';                    
                }
        }            

    }
    if (isset($_POST['button2']))
    {
         exec('sudo /var/www/scripts/shutdown.sh');
        
    }
?>
