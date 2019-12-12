<?php
 
 include("config.php");
 include("auth.php");
 include('organizer title.php');

 

 
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
<style>
body{
   background-color:#455a64; /*#245a64 */
}
.container{
    margin-top:70px;
    background-color:#EEE;

}
h2{
  border-radius:10px 10px 0px 0px;
  text-align:center;
  background-color:#455a64;
  color:#fafafa;
  padding:10px 0px 10px 10px;
  margin-bottom:0px;
  
}



</style>
</head>
<body>
<div class="container">
 
<div class="col-xs-7"><h2><?php echo $eve['evename'] ?>'s Attendee List</h2>

</div>

<form role="form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
if(isset($_POST['search'])&& strlen($_POST['search'])>=5){
 	$searchq=$_POST['search'];
 	$searchq=preg_replace("#[^0-9a-z]#","",$searchq);
 	$query=mysqli_query($conn,"SELECT * FROM attendees,event WHERE event_id=$id AND ticket_id=$searchq  ")or die('<h1>Not Found<h1>');
 	$count=mysqli_num_rows($query);
 	if($count==0){ 
 		echo "<p class='alert alert-danger'>Not exists!</p> ";
 	}else{
 		while($row=mysqli_fetch_array($query)){
 		    if($row['ticket_id']==$searchq){
          $status=$row['Status']+1;
 		      $sql="UPDATE attendees SET Status='$status' WHERE ticket_id=$searchq";  
 		      mysqli_query($conn,$sql); 

 		  } 
 	       } 	       	echo "<p class='alert alert-success'>Found!</p> ";
 		}
 	}?>
<div class="form-group">
<!--  <label for="evename" class="col-xs-3 control-label">Check Attendee</label>-->
   <div class="col-xs-9">
    <input type="text" class="form-control" name="search" id="search">
    <input type="submit" class="btn btn-info" value="Check">
   </div>
 </div>
 </form>

<table class="table table-bordered responsive">
<th>Name</th><th >Email</th><th>Phone</th><th>Status</th>
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
 <?php 
  if($row['Status']==0){
  	echo "Registered";
  	}else{
  	echo "Arrived ".$row['Status']." day(s)";	
  		} ?>
 </td>
  </tr>
<?php } 
 endwhile; ?>


 </table>


</div>
</body>
</html>

   