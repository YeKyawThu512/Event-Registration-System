<?php
 include("config.php");

 $id=$_POST['id'];
 $evename=$_POST['evename'];
 $start_time=$_POST['start_time'];
 $end_time=$_POST['end_time'];
 $location=$_POST['location'];
 $cover=$_FILES['cover']['name'];
 $tmp=$_FILES['cover']['tmp_name'];
 $attendees=$_POST['attendees'];
 $abouteve=$_POST['abouteve'];
 if($cover){
  move_uploaded_file($tmp,"covers/$cover");
  $sql="UPDATE event SET evename='$evename',start_time='$start_time',end_time='$end_time',location='$location',cover='$cover',attendees='$attendees',abouteve='$abouteve',modified_date=now() WHERE id=$id";
   }else{
   $sql="UPDATE event SET evename='$evename',start_time='$start_time',end_time='$end_time',location='$location',attendees='$attendees',abouteve='$abouteve',modified_date=now() WHERE id=$id";
   } 
 
 mysqli_query($conn,$sql);
 header("location:view-event.php");
 ?>