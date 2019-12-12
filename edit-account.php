<?php
 include("config.php");
 include("auth.php");
 include("organizer title.php");


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

<div class="form-group">
   <label for="cover" class="col-xs-4 control-label">Change Cover</label>
    <div class="col-xs-8">
     <input type="file" class="form-control" name="cover" id="cover">
    </div>
     <img src="covers/<?php echo $row['cover'] ?>" class="img-responsive img-rounded" alt="" width="300" height="350">
  </div>
    

 <input type="submit" class="btn btn-primary" value="Update Event">
 <a href="view-event.php" class="btn btn-primary">Back</a>
 
</div>
</div>
</body>
</html>
