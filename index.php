<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="css/site.css">
<script src="js/scripts.js"></script>
<?php include 'functions.php';?>
</head>

<body>

<div class="light">
    <img id="myImage"  src="resources/pic_bulboff.gif" height="120" >
</div>
 <div class="spinner" id="load">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
<div class="sk-circle">
  <div class="sk-circle1 sk-child"></div>
  <div class="sk-circle2 sk-child"></div>
  <div class="sk-circle3 sk-child"></div>
  <div class="sk-circle4 sk-child"></div>
  <div class="sk-circle5 sk-child"></div>
  <div class="sk-circle6 sk-child"></div>
  <div class="sk-circle7 sk-child"></div>
  <div class="sk-circle8 sk-child"></div>
  <div class="sk-circle9 sk-child"></div>
  <div class="sk-circle10 sk-child"></div>
  <div class="sk-circle11 sk-child"></div>
  <div class="sk-circle12 sk-child"></div>
</div>
<div id="test" class="middle">

    <div class="button">
 
        <form method="post">
        <p>
            <button id="shutdown_button" name="shutdown_button">Shutdown</button>
        </p>
        </form>              
        <form method="post">
        <p>
            <button id="start_button" onclick="loading()" name="start_button">Start</button> 
        </p>
        </form>
    </div>

</div>
<?php 
checkIfServerIsRunning();
?>
</body>
<?php
    if (isset($_POST['start_button']))
    {
      wakeServer();
      checkIfServerIsRunning();
    }
    if (isset($_POST['shutdown_button']))
    {
         exec('sudo /var/www/scripts/shutdown.sh');
         checkIfServerIsRunning();
        
    }
?>
