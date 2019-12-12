<?php

session_start();

 include('config.php');
 include('title_bar.php');
 

 $books = mysqli_query($conn, "SELECT * FROM event ORDER BY start_time");
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style type="text/css">
body{
  background-color:#607e8b;
  background:url(img/slide1.jpg);
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  font-family:sans-serif;
}
.container{
  margin-top:100px;
  

}
.left{
  float:left;
}
table{
  float:right;
}
td{
  height:125px;

}

.card{
  margin-top:-5px;
  margin-bottom:20px;
  border-radius:10px;  
  box-shadow:0 6px 5px 0 rgba(0,0,0,0.1),
             0 6px 5px 0 rgba(0,0,0,0.5);
  background-color:#EEE;
  
}
.date{
  width:25%;
  text-align:center;  
}
h3{
  background-color:gray;
  padding:15px;
  border-radius:8px 8px 0px 0px;
  margin-top:-6px;
  color:white;
  box-shadow:0 2px 1px 0 rgba(0,0,0,0.1),
             0 2px 1px 0 rgba(0,0,0,0.1);
}
.day{
  margin-top:-10px;
  
  text-align:center;
}

/* right */
.data{
 padding-left:15px;
}
.header{
  font-size:20px;
  text-align:center;
  width:75%;
  height:50px;
  margin-top:-110px;
  background:linear-gradient(-40deg,#2196f3,#c2185b);
  padding:5px;
  border-radius:8px 8px 0px 0px;
  color:white;
  box-shadow:0 1px 1px 0 rgba(0,0,0,0.1),
             0 1px 1px 0 rgba(0,0,0,0.1);
  float:right;
}
/* right */

.btn-info{
  float:right;
  margin-top:-40px;
}

</style>
</head>
<body>
<div class="container">
<table class="table">
  
 <?php while($row =mysqli_fetch_assoc($books)): 
 $exp_date=$row['end_time'];
 $today_date=date('Y/m/d');
 //now convert to strtotime
 $exp=strtotime($exp_date);
 $td=strtotime($today_date); 
  if($td>$exp){

  }else{ ?>
 <td class="card">
 
   <div class="date"> <!-- left site  -->
    <h3>
     <?php
       $startdate = date("M", strtotime($row['start_time']));
       echo $startdate ?>
    </h3> 

    <h1 class="day" align="center">
     <?php
       $startdate = date("dS", strtotime($row['start_time']));
       //$enddate = date("dS F", strtotime($row['end_time']));
       echo $startdate; ?>
    </h1>
   </div>             <!-- end left site-->

   <div class="data">
    <p class="header"><?php echo $row['evename'] ?></p>
<!--    <p class="dayleft">
     <?php
       if($td>$exp)
       { 
        $diff=$td-$exp;
        $x=abs(floor($diff/(60*60*24)));
        echo "This event is finished";
        }else if ($td==$exp) {
        echo "Happening";
        }else{
        $diff=$td-$exp;
        $x=abs(floor($diff/(60*60*24)));  
        echo $x." day(s) left";
        }
       ?>
     </p> -->
     <a href="event-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Check Info</a>
   </div>
 

<?php } ?>
 <?php  endwhile; ?>
</td>
 </table>

</div>
</div>
</body>
</html>