<?php 
 include("config.php");
 
  
 
 $evename=$_POST['evename'];
 $start_time=$_POST['start_time'];
 $end_time=$_POST['end_time'];
 $location=$_POST['location'];
 $cover=$_FILES['cover']['name'];
 $tmp=$_FILES['cover']['tmp_name'];
 $attendees=$_POST['attendees'];
 $abouteve=$_POST['abouteve'];
 $users_id=$_POST['users_id'];

 if($cover){
 	move_uploaded_file($tmp,"covers/$cover");
 }

 $sql= "INSERT INTO event(evename,start_time,end_time,location,cover,attendees,abouteve,users_id,created_date,modified_date)VALUES('$evename','$start_time','$end_time','$location','$cover','$attendees','$abouteve','$users_id',now(), now())";
 mysqli_query($conn,$sql);
 header("location:view-event.php");
?>