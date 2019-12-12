<?php
 include("config.php");
 include("auth.php");
 include("organizer title.php");

 
 $result = mysqli_query($conn,"SELECT * FROM users WHERE id= '".$_SESSION['id']."'");
 $row    = mysqli_fetch_assoc($result);
 
 $result1 = mysqli_query($conn,"
 SELECT event.*, users.name
 FROM event LEFT JOIN users
 ON event.users_id = users.id
 ORDER BY event.created_date DESC
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
<style type="text/css">
 body{
   background-color:#455a64; /*#245a64 */
}
.container{
    background-color:#fff;
}
h3{

  background-color:#1976d2;
  border-radius:20px; 
  padding:40px;
  color:white;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
               0 2px 2px 0 rgba(0,0,0,0.1);
  
  text-align:center;
} 
.right{
    float:right;
}
</style>
</head>
<body>
<div class="container">

<div class="col-xs-7"><h3>Ongoing List</h3></div>
<div class="col-xs-5">


</div>


 
 
<table class="table table-bordered">

 <?php while($row = mysqli_fetch_assoc($result1)) :
  if($_SESSION['id']==$row['users_id']){

    $start_date=$row['start_time'];
    $exp_date=$row['end_time'];
    $today_date=date('Y/m/d');
    
    $start=strtotime($start_date);
    $exp=strtotime($exp_date);
    $td=strtotime($today_date); 
    if($td>=$start&&$td<$exp){

    ?>
 <tr>
 <td>
 <p><?php echo $row['evename'] ?></p>
 <p class="right">
 <?php $startdate = date("dS M y", strtotime($row['start_time']));
       echo $startdate ?> To <?php
       $enddate = date("dS M y", strtotime($row['end_time']));
       echo $enddate ?></p>
 <p><?php echo $row['attendees'] ?></p>
 
 <a href="attendees_list.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-info" id="list" value="Check Attendee"></a>
 
 </td>
 </tr>
<?php } ?>
 <?php } endwhile; ?>
 

 </table>


</div>

</body>
</html>

   