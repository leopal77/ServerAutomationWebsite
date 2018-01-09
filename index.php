<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/site.css">
</head>
<body>
<?php
    if (isset($_POST['on']))
    {
         echo shell_exec('/var/www/html/scripts/wake_dell.sh');
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
        <button class="on" name="button1">Start</button> 
       <!-- <input class="on" type="button" name="on" value="ΕΝΕΡΓΟΠΟΙΗΣΗ">-->
    </p>
    </form>
        <form method="post">
    <p>
        <button name="button2">Shutdown</button>
    </p>
    </form>


			
			<input class="off" type="button" name="off" value="AΠΕΝΕΡΓΟΠΟΙΗΣΗ"  ">

</div>
</body>
