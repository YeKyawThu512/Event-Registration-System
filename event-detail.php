<?php

 include('config.php');
 include('title_bar.php');


 $id = $_GET['id'];
 $event = mysqli_query($conn, "SELECT * FROM event WHERE id = $id");
 $row = mysqli_fetch_assoc($event);
 $start_time=$row['start_time'];
 $exp_date=$row['end_time'];
 $today_date=date('Y/m/d');
 //now convert to strtotime
 $start=strtotime($start_time);
 $exp=strtotime($exp_date);
 $td=strtotime($today_date);
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
 body{
  font-family:'Catamaran',sans-serif;
  background:url(img/slide.5.jpg);
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  font-family:sans-serif;
 
 
}
.container{
  margin-top:100px;
   border-radius:10px; 
   align-items:center;
   background-color:white;
   padding:10px;
  
   box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
               0 2px 2px 0 rgba(0,0,0,0.1);
   margin-bottom:50px;
   }
.image{
  background:#000 url(covers/<?php echo $row['cover'] ?>);
  background-size:cover;
  background-position:center;
  font-family:sans-serif;
  display:flex;
  height:200px;
  width:100%;
  justify-content:center;
  border-radius:4px;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
               0 2px 2px 0 rgba(0,0,0,0.1);
}
h3{
  
  background-color:pink;
  border-radius:20px; 
  padding:30px;
  color:white;
  box-shadow:0 2px 2px 0 rgba(0,0,0,0.1),
             0 2px 2px 0 rgba(0,0,0,0.1);
  background:linear-gradient(-45deg,#6018dc,#eead92);

} 
.date{
  margin-top:-50px;
  border-radius:88px;
  background-color:lightblue;
  padding:10px;
  float:left;
  color:white; 
  box-shadow:0 2px 2px 0 rgba(0.1,0,0,0.1),
               0 2px 2px 0 rgba(0,0,0,0.1);
  background:linear-gradient(-65deg,#537895,#970bcc);
  opacity:.9;
}
.available{
  margin-top:-50px;
  border-radius:88px;
  background-color:lightblue;
  padding:10px;
  width:140px;
  color:white; 
  float:right;
  box-shadow:0 2px 2px 0 rgba(0.1,0,0,0.1),
               0 2px 2px 0 rgba(0,0,0,0.1);
  background:linear-gradient(-65deg,#537895,#970bcc);
  opacity:.9;
  text-align:center;
}
.card{
  border-radius:5px;
  padding:20px;
  box-shadow:0 1px 1px 0 rgba(0,0,0,0.1),
               0 1px 1px 0 rgba(0,0,0,0.1);
  margin-left:2px;
  margin-right:2px;
  clear:fixed;
}
.btn btn-info{
  float:left;
  margin-bottom:20px;
}
.day{
  margin-top:10px;
   
}
i.fa-map-marker{
  margin:0px 10px 0px 0px;
  padding-left:5px;
  color:#3949ab;
}
i.fa-calendar{
   color:#3949ab;
}
textarea{
  display:inline-block;
  opacity:1;
  text-align:justify;
}
b{
   background-color:#C62828;
   padding:7px;
   border-radius:10px; 
}

</style>
</head>
<body>

<div class="container">
   <h3 align="center"><?php echo $row['evename'] ?></h3> 
    <div class="image"></div>
 
<p class="date">
 <?php
 $startdate = date("dS F", strtotime($row['start_time']));
 $enddate = date("dS F", strtotime($row['end_time']));
 if($startdate==$enddate){
  echo $startdate;
 }else{
  echo $startdate. ' To '.$enddate;
 }
  ?>
 </p>


<?php 
  if($td>$exp){
    
    }else{ ?>
 <p class="available" title="make a quick Register">Available:
 <?php 
  if($row['attendees']<=0){ 
   echo "<b>Full</b>";  
    }else{
   echo $row['attendees']; 
   }?></p>
 <?php  } ?>


 <div class="day">
 <i  class="fa fa-calendar"></i> 
 <?php
 
 //now compare by using if logic
 if($td>$exp)
 {
 	//count how many days 
 	$diff=$td-$exp;
 	$x=abs(floor($diff/(60*60*24)));
 	echo "<p class='right'>This event is finished</p>";
 }else if($td>=$start&&$td<=$exp) {
 	echo "Ongoing";
 }else{
 	$diff=$td-$start;
    $x=abs(floor($diff/(60*60*24)));	
 	echo $x." day(s) left.";
 }
 ?>
 </p>

 <p ><i class="fa fa-map-marker"></i><?php echo $row['location'] ?></p>
</div>



<textarea cols="130" rows="6" maxlength="auto" disabled="yes" wrap="hard"><?php echo $row['abouteve'] ?></textarea>

<?php
if($row['attendees']<=0 or $td>$exp){ 

 }else{?>
 </br>
<a href="attendees_registration.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Register</a>

<?php } ?>

</div>
<?php include('footer.php') ?>

</body>
</html>