<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/site.css">
</head>
<body>
<?php
    if (isset($_POST['button1']))
    {
         //echo exec('whoami');
         echo shell_exec('/var/www/scripts/wake_dell.sh');
         //$timeout = 10;
         //$socket = @fsockopen( '192.168.1.24',80, $errno, $errstr, $timeout );
         //$online = ( $socket !== false );
         //echo $online;

var_dump( $online );
    }
        if (isset($_POST['button2']))
    {
         echo exec('sudo /var/www/scripts/shutdown.sh');
         echo exec('whoami');
    }
    
    
    
?>
<div class="button">
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
