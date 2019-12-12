<?php
 include("config.php");
 include("auth.php");
 include("organizer title.php");

 $id=$_GET['id'];
 $result=mysqli_query($conn,"SELECT * FROM event WHERE id=$id");
 $row=mysqli_fetch_assoc($result);
 ?>
<DOCTYPE html>
<html lang="en">
<head>
<title>Event edit</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style type="text/css">

.img-responsive{
	padding:15px 4px 0px 4px;
}
</style>
</head>
<body>
<div class="container">

<h2>Edit Event</h2>

<form role="form" class="form-horizontal" action="update-event.php" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  
 <div class="form-group">
  <label for="evename" class="col-xs-3 control-label">Name of Your Event</label>
   <div class="col-xs-9">
    <input type="text" class="form-control" name="evename" id="evename" value="<?php echo $row['evename'] ?>">
   </div>
 </div>

 <div class="form-group">
 <label for="start_time" class="col-xs-5 control-label">Start Date</label>
  <div class="col-xs-9 input-group">
	<input type="text" name="start_time" id="start_time" class="form-control" value="<?php echo $row['start_time'] ?>" required>
	 <span class="input-group-addon"><img src="img/calendar.png"/></span>
  </div>
</div>

<div class="form-group">
 <label for="end_time" class="col-xs-5 control-label">End Date</label>
  <div class="col-xs-9 input-group">
	<input required id="end_time" type="text" class="form-control" name="end_time"
	value="<?php echo $row['end_time'] ?>" required>
	<span class="input-group-addon"><img src="img/calendar.png"/></span>
  </div></div>

 <div class="form-group">
  <label for="Location" class="col-xs-5 control-label">Location</label>
   <div class="col-xs-9">
    <input type="text" name="location" id="location" class="form-control" value="<?php echo $row['location'] ?>"  required>
   </div>
 </div>

<div class="form-group">
   <label for="cover" class="col-xs-4 control-label">Change Cover</label>
    <div class="col-xs-8">
     <input type="file" class="form-control" name="cover" id="cover">
    </div>
     <img src="covers/<?php echo $row['cover'] ?>" class="img-responsive img-rounded" alt="" width="300" height="350">
  </div>
    

  <div class="form-group">
  <label for="evename" class="col-xs-5 control-label">How many attendees</label>
   <div class="col-xs-9">
    <input type="text" name="attendees" id="attendees" class="form-control" value="<?php echo $row['attendees'] ?>"  required>
   </div>
 </div>


 <div>
  <label for="abouteve">About Event</label>
   <textarea name="abouteve" class="form-control" id="abouteve" rows="8"><?php echo $row['abouteve'] ?></textarea>
 </div><br>

 <input type="submit" class="btn btn-primary" value="Update Event">
 <a href="view-event.php" class="btn btn-primary">Back</a>
 </form>
</div>
<br/><br/>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script>

$('#start_time').datetimepicker({
  format:"Y/m/d",
  formatTime:"",
    timepicker:0
}
);
$('#end_time').datetimepicker({
  format:"Y/m/d",
  formatTime:"",
    timepicker:0
});

</script> 


<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>
