<?php
 include("config.php");
 session_start();

 unset($_SESSION['password']);

 session_destroy();
 header("location:events.php");
 ?>