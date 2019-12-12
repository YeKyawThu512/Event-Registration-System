<?php

 include('config.php');

 include('title_bar.php');


 $id = $_GET['id'];
 $attendee = mysqli_query($conn, "SELECT * FROM attendees WHERE id = $id");
 $row = mysqli_fetch_assoc($attendee);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>New Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>

</style>
</head>
<body>

<div class="container">

 <p><?php echo $row['name'] ?></p>

 
 <p><?php echo $row['email'] ?></p>
  <p><?php echo $row['phone'] ?></p>





</div>
</br></br>
<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</body>
</html>