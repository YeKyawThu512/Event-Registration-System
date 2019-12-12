<?php

 include("config.php");
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome to Event</title>
  
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <style type="text/css">
  body{
  font-family:'Catamaran',sans-serif;
  }
  .container{
    margin-top:50px;
    padding:20px;
    transition:margin-left.7s;
  }
  
  a.fa{
    font-size:30px;  /*--every icon  #80deea 311b92--*/
    color:#EEE;    
  }  
  .navbar{
    box-shadow:0 6px 5px 0 rgba(0,0,0,0.1),
               0 6px 5px 0 rgba(0,0,0,0.1);
    background-color:#42a5f5; 
  }
  .nav .close{
  position:absolute; 
  color:#E3342f;
  top:0;
  padding:0px;
  right:2px;
  font-size:30px;
  }
  a.fa:hover{
    color: #311b92; /*--f1f1f1 */
    opacity: 2;
    text-decoration:none; 
  }
  .profile{
    color:white;
   }
   .img-rounded,h4{
    margin-left:23px;
   }
 .nav{
  height:100%;
  width:0;
  position:fixed;
  z-index:1;
  top:0;
  left:0;
  background-color:#2d3135;
  opacity:0.9;
  padding-top:60px;
  transition:0.7s;
  overflow-x: hidden;
 }
.nav a{
  display:block;
  padding:20px 30px;
  color:#ccc;
  text-decoration:none;
  font-size:25px;
}
.nav a:hover{
  color:#fff;
  transition:.5s;
}
  </style>
 

  </head>
  <body>
  
  
<script type="text/javascript">
 function openSlideMenu(){
  document.getElementById('menu').style.width='250px';
  document.getElementById('content').style.marginLeft='250px';
 }
 function closeSlideMenu(){
  document.getElementById('menu').style.width='0px';
  document.getElementById('content').style.marginLeft='0px';
 }

</script>

<div id="container">
  
   <nav class="navbar fixed-top">
   <!--<div id="menu" class="nav">
    <a href="#" class="close" onclick="closeSlideMenu()">
     <i class="fa fa-times"></i>
    </a>
    <div class="profile">
    <?php
      $result = mysqli_query($conn,"SELECT * FROM users WHERE id= '".$_SESSION['id']."'");
      $row    = mysqli_fetch_assoc($result);
    ?>
    <img src="covers/profile.png" alt="" width="200" height="180" class="img-rounded">
    <h4 align="center"><?php echo $row['name']?></h4>
    <h4 align="center"><?php echo $row['email']?></h4>
    <h4 align="center"><?php echo $row['phone']?></h4>
    <h4 align="center"><?php echo $row['cmp_name']?></h4>
    </div>
   </div>
     <button class="btn " type="button" > 
           <a href="#" class="fa fa-align-justify" onclick="openSlideMenu()"></a>
       </button>-->
     
     <button class="btn " type="button"> 
           <a href="new-event.php" class="fa fa-file" title="Create New Events"></a>
      </button>
      
     <button class="btn " type="button"> 
           <a href="view-event.php" class="fa fa-list-alt" title="Event that you created"></a>
      </button>

      
     
      <button class="btn " type="button"> 
           <a href="past-event.php" class="fa fa-inbox" title="Checking Attendees"></a>
      </button>


      <button class="btn " type="button"> 
           <a href="logout.php" class="fa fa-share" title="Logout"></a>
      </button>

 

 
 </nav>  
</div>

</body>
</html>