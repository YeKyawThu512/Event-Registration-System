<?php

 include("config.php");
 require_once("phpqrcode/qrlib.php");

 
 QRcode::png($_POST['ticket_id']);
?>
