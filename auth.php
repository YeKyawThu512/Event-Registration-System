<?php
 session_start();
 if(!isset($_SESSION['auth'])){
 header("location:events.php");
 exit();
 }
?>
