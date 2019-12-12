<?php
 
 include("config.php");
 include("title_bar.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>New Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style type="text/css">
body{
   background:url(img/slide.5.jpg);
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  font-family:sans-serif;
 

}
.container{
  margin-top:80px;
  
  

}
table{
  background-color:#fafafa;
  border-radius:20px;
}
h2{
	text-align: center;
}	
th{
	text-align:center;
}
.total{
	text-align:center;
}
.name{
  text-align:center;
}
.date{
  text-align:center;
}
.du{
  text-align:center;
}
.status{
  text-align:center;
}
</style>

</head>
<body>
<div class="container">


<?php

 $result = mysqli_query($conn, "SELECT * FROM event ORDER BY start_time DESC");
?>


<table class="table table-bordered">
<th width="300px">Name</th>
<th width="140px">Date</th>
<th width="130px">Event Duration</th>
<th width="50px">Available </th>
<th width="80px">Status</th>
 <?php while($row =mysqli_fetch_assoc($result)): ?>
 
 <tr>
 <td class="name">    
 <?php 
 echo $row['evename'];
 $start_time=$row['start_time'];
 $exp_date=$row['end_time'];
 $today_date=date('Y/m/d');
 $start=strtotime($start_time);
 $exp=strtotime($exp_date);
 $td=strtotime($today_date); 
 ?>
 </td>

 <td class="date">
 <?php 
  $startdate = date("d M Y", strtotime($row['start_time']));
  $enddate = date("d M Y", strtotime($row['end_time']));
  if($startdate==$enddate){
  echo $startdate;
 }else{
  $startdate = date("d M ", strtotime($row['start_time']));
  $enddate = date("d M Y", strtotime($row['end_time']));
  echo $startdate.' - '.$enddate;
 }
  ?>
 </td>

 <td class="du">
 <?php 
  $diff=$exp-$start;
  $x=abs(floor($diff/(60*60*24)));  
  $day=$x+1;
  if($day==1){
    echo $day.' day';
  }else{
    echo $day.' days';
  }

  ?>


 </td>
  
<td class="total">
 <?php
 $attendee=$row['attendees'];
 if($attendee<=0){
    echo "<b>No</b>";
  }else if($td>$exp){
    echo "<b>No</b>";
  }else if($attendee<10){
      if($attendee==1){
      echo  "Only ".$attendee." left";
      }else{
      echo  "Only ".$attendee." lefts";  
      }
  }else{
    echo  "Yes";
 }
 ?>
</td>

 <td class="status">
 <?php
  $enddate = date("dS M Y ", strtotime($row['end_time']));

  if($td>$exp){ 
   echo "<p class='fin'> Finished</p>";
   }else if($td>=$start&&$td<=$exp){
 	echo "Ongoing";
   }else{ 
 	$diff=$td-$start;
    $x=abs(floor($diff/(60*60*24)));	
    if($x==1){
      echo $x." day left";
    }else{
      echo $x." days left"; 
    }
  }
?>
 </td> 

 </tr>




<?php  endwhile; ?>
 </table>

 

</div>

</body>
</html>

   