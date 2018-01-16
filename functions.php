<?php
function checkIfServerIsRunning(){
	$server_status = shell_exec('/var/www/scripts/ping.sh');
    if($server_status==0)
        {
        	//echo "Active";
            echo '<script type="text/javascript">',
            'var load=document.getElementById("load");',
            'load.style.display="none";',
            'lightsOn();',
            '</script>';
        }
        elseif($server_status==1)
        {
        //	echo "InActive";
            echo '<script type="text/javascript">',
            'lightsOff();',
            '</script>';
        }
}

function wakeServer(){
	$server_status = shell_exec('/var/www/scripts/wake_dell.sh');
}
?>