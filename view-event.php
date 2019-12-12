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
 ORDER BY event.start_time DESC
 ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Event</title>
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
    margin-top:70px;
    background-color:#EEE;
    border-radius:10px;
    padding:40px;
}

h2{
  text-align:center;
  background-color:#455a64;
  color:#fafafa;
  padding:10px 0px 10px 10px;
  margin-bottom:0px;
  border-radius:10px 10px 0px 0px;
  
}
.red{
  background-color:#C62828;
  color:#EEE;
  border-radius:10px 10px 0px 0px;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
             0 2px 2px 0 rgba(0,0,0,0.1);
}
.card{
     background-color:#EEE;
     border-radius:10px 10px 0px 0px;
     width:100%;
     border-radius:0px;
     box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
             0 2px 2px 0 rgba(0,0,0,0.1);
   }

.name{
   margin-top:0px;
   background-color:#42a5f5;
   color:#FDFDFD;
   border-radius:10px ;
   text-align:center;
   padding:10px;
   font-size:20px;

}
.btn-danger,.btn-primary,.btn-info{
  float:right;
  margin:0px 5px 0px 5px;
}
.expire{
  font-size:20px;
}
.col-xs-5{
  float:right;
  margin-bottom:5px;
}
.days{
  padding:5px;
  
  background-color:#512da8;
  border-radius:25px; 
  color:#EEE;
  margin-bottom:5px;
  float:left;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
             0 2px 2px 0 rgba(0,0,0,0.1);
}
.finish{
   background-color:#C62828;
   padding:4px;
   border-radius:10px; 
}
.happen{
    
   
   padding:2px;
    
}
.fin{
   padding:5px;
  background-color:#512da8;
  border-radius:10px; 
  color:#EEE;
  margin-bottom:5px;
  float:left;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
             0 2px 2px 0 rgba(0,0,0,0.1);
}
</style>
</head>
<body>
<div class="container">
<table class="table">
  <?php 
      if(isset($_GET['account']) and $_GET['account']=="success") { ?>
        <div class="alert alert-success" style="text-align: center">
        <b>Welcome <?php echo $row['name']?></b>!! 
        </div>
    <?php
   
    }
    ?> 
<h2>Your Event List</h2>




 <?php 
  while($row = mysqli_fetch_assoc($result1)) :
    if($_SESSION['id']==$row['users_id']){ 
       $exp_date=$row['end_time'];
       $start_date=$row['start_time'];
       $today_date=date('Y/m/d');
 
       $exp=strtotime($exp_date);
       $start=strtotime($start_date);
       $td=strtotime($today_date); ?>



      
<?php if($td>$exp){  ?>

<tr class="red">
 <td>
  <h1 class="name"><?php echo $row['evename'] ?></h1>
   <p class="expire">  
    <?php
       $startdate = date("dS M y", strtotime($row['start_time']));
       echo $startdate ?> To <?php
       $enddate = date("dS M y", strtotime($row['end_time']));
       echo $enddate ?>
      
   </p>
      
  <p class="fin">
  Event Status:<b class="finish">Finished</b>
 </p>
  <a href="del-event.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-danger" value="Delete"></a>
 
  <a href="view-attendees.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-info" id="list" value="Registration List"></a>
 </td>
</tr>



<?php }else{ 

 if($td>=$start&&$td<=$exp){?>


 
 <tr class="alert alert-success">
 <td>
 <p class="name"><?php echo $row['evename'] ?><p>
 <p><?php
       $startdate = date("dS M y", strtotime($row['start_time']));
       echo $startdate ?> To <?php
       $enddate = date("dS M y", strtotime($row['end_time']));
       echo $enddate ?></p>
  <p class="days">
  Event Status: 
 
 <b class='happen'>Ongoing<b>
  

 </p>
 <a href="del-event.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-danger" value="Delete"></a>
 
 <a href="edit-event.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-primary" value="Edit"></a>
  
 <a href="view-attendees.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-info" id="list" value="Registration List"></a> 

 </td>
 </tr>

<?php }else{ ?>


 <tr class="card">
 <td>
 <p class="name"><?php echo $row['evename'] ?><p>
 <p class="expire"><?php
       $startdate = date("dS M y", strtotime($row['start_time']));
       echo $startdate ?> To <?php
       $enddate = date("dS M y", strtotime($row['end_time']));
       echo $enddate ?></p>
  <p class="days">
  Event Status:
  <?php 

  $diff=$td-$start;
  $x=abs(floor($diff/(60*60*24)));  
  
  if($x>0){
  echo $x." day(s) left.";
  }else{
  echo "<b class='happen'>Ongoing<b>";
  }

 ?>
 </p>
 <a href="del-event.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-danger" value="Delete"></a>
 
 <a href="edit-event.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-primary" value="Edit"></a>
  
 <a href="view-attendees.php?id=<?php echo $row['id'] ?>"><input type="submit" class="btn btn-info" id="list" value="List of Attendees"></a> 

 </td>
 </tr>
 <?php
}

}
  } 

 endwhile; ?>
 
 
</table>
</div>


</body>
</html>

   