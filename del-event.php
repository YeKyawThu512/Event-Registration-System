<?php 
  include("config.php");

  $id=$_GET['id'];
  $sql="DELETE FROM event WHERE id=$id";

  mysqli_query($conn,$sql);
  header("location:view-event.php");

 ?>