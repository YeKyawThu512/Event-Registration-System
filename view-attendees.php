<?php
 
 include("config.php");
 include("auth.php");
 include("organizer title.php");

 
 $id = $_GET['id'];
 $event = mysqli_query($conn, "SELECT * FROM event WHERE id = $id");

 $eve=mysqli_fetch_array($event);
 $attendee = mysqli_query($conn, "SELECT * FROM attendee WHERE id=$id");

 $result1 = mysqli_query($conn,"
 SELECT attendees.*,event.id
 FROM attendees LEFT JOIN event
 ON attendees.event_id =event.id
 ORDER BY attendees.created_date DESC
 ");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Event</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>

</head>
<body>
<div class="container">
 
<div class="col-xs-7"><h2><?php echo $eve['evename'] ?>'s Attendee List</h2>



<table class="table table-bordered responsive">
<th>Name</th><th>Email</th><th>Phone</th><th>Ticket ID</th><th>Status</th>
 <?php while($row = mysqli_fetch_assoc($result1)):
 	if($id==$row['event_id']){ 
   
  if($row['Status']>=1){?>
 <tr class='alert alert-success'>
  <?php 	}else{ ?>
 <tr>
 <?php } ?>
 <td>

 <?php echo $row['name'] ?>
 </td>
 <td>
 <?php echo $row['email'] ?>
 </td>
 <td>
 <?php echo $row['phone'] ?>
 </td>
 <td>
 <?php echo $row['ticket_id'] ?>
 </td>

 <td>
 <?php 
  if($row['Status']==0){
  	echo "Registered";
  	}else{
  	echo "Arrived ".$row['Status']." days";	
  		} ?>
 </td>
  </tr>
<?php } 
 endwhile; ?>


 </table>


</div>

</body>
</html>

   