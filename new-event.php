<?php
 include("config.php");
 include("auth.php");
 include("organizer title.php");
 
 
 $result = mysqli_query($conn,"SELECT * FROM users WHERE id= '".$_SESSION['id']."'");
 $row    = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>New Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
body{
   background-color:#455a64; /*#245a64 */
}
.container{
    margin-top:100px;
    background-color:#EEE;
    border-radius:10px;
    padding:40px;
}
h2{
  text-align:center;
  background-color:#455a64;
  color:#fafafa;
  padding:20px;
  margin-bottom:0px;
  border-radius:10px 10px 0px 0px;
  
}


</style>
<script >
 

</script>
</head>
<body>

<div class="container">


<h2>Create Event</h2><br/>
<?php
  if(isset($_SESSION['id'])){
    $users_id=($_SESSION['id']);
 ?>
<form class="form-horizontal" role="form" action="add-event.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="users_id" value="<?php echo $users_id ?>">

 <div class="form-group">
  <label for="evename" class="col-xs-3 control-label">Name of Your Event</label>
   <div class="col-xs-9">
    <input type="text" name="evename" id="evename" class="form-control" required>
   </div>
 </div>



<div class="form-group">

 <label for="start_time" class="col-xs-5 control-label">Start Date</label> 
 <label for="end_time" id="end_date" class="col-xs-5 control-label">End Date</label>
  <div class="col-xs-0 input-group">
  <span class="input-group-addon">
	<input type="text" name="start_time" id="start_time" class="col-xs-5 control-label" required>
	 </span><p style="padding:5px">To</p><!--<img src="img/calendar.png" width="30px"/>-->
  <span class="input-group-addon">
  <input type="text" name="end_time" id="end_time" class="col-xs-5 control-label" required>
  </span>
  </div>

</div>
			


<div class="form-group">
  <label for="Location" class="col-xs-5 control-label">Location</label>
   <div class="col-xs-9">
    <input type="text" name="location" id="location" class="form-control" required>
   </div>
 </div>

 <div class="form-group"> 
  <label for="cover" class="col-xs-3 control-label">Event Photo</label>
   <div class="col-xs-9">
    <input type="file" name="cover" id="cover" required>
   </div>
 </div>

 <div>
  <label for="abouteve">About Your Event</label>
    <textarea name="abouteve" id="abouteve" class="form-control" rows="6" required> </textarea>
  </div>

   <div class="form-group">
  <label for="evename" class="col-xs-5 control-label">How many attendees</label>
   <div class="col-xs-9">
    <input type="text" name="attendees" id="attendees" class="form-control" required>
   </div>
 </div>
 <div class="form-group">

 </div>
 
<br >
<input type="submit" class="btn btn-primary" value="Add">


<a href="view-event.php" class="btn btn-primary" style="margin-right:0">Back</a>
</div>
</form><br/><br/>
 <?php } ?>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script>

$('#start_time').datetimepicker({
	format:"Y/m/d",
    timepicker:0
}
);
$('#end_time').datetimepicker({
	format:"Y/m/d",
    timepicker:0
});

</script>	


<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</body>
</html>
