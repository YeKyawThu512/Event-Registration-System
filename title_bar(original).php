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
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> 
  <style type="text/css">
  .container{
    margin-top:60px;
  }
  .fa{
    font-size:28px;
    color:#E3342f;  
  } 
  .navbar{
    box-shadow:0 6px 5px 0 rgba(0,0,0,0.1),
               0 6px 5px 0 rgba(0,0,0,0.1);
    background-color:#6f213f; 
    font-size:20px;
  }
  .fa:hover{
    color: #f1f1f1;
    opacity: 2;
   }
  </style>
  </head>
  <body>
  
  
<?php
  if(!isset($_SESSION)){
   session_start();
  }
  if(isset($_SESSION['id'])) { ?>
<!--<div class="d-flex" id="wrapper">
 <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
        <a href="new-event.php" class="list-group-item list-group-item-action bg-light">Create New Event</a>
        <a href="view-event.php" class="list-group-item list-group-item-action bg-light">My Event Lists</a>
        <a href="account.php" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Feedback</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Logout</a>
    </div>
 </div>
   <div id="page-content-wrapper">  -->        
    <nav class="navbar border-bottom">
 
      <button class="navbar-toggler" id="menu-toggle" type="button">
           <a href="#" class="fa fa-align-justify"></a>
      </button>
        
     
      <!-- <button class="btn " type="button"> 
           <a href="events.php" class="fa fa-envelope"></a>
       </button> -->

       <button class="btn " type="button"> 
           <a href="view-event.php" class="fa fa-home"></a>
       </button>
  <!-- 
      <button class="btn " type="button"> 
           <a href="event-list.php" class="fa fa-list-alt"></a>
      </button>-->
      
      <button class="btn " type="button"> 
           <a href="Logout.php" class="fa fa-share"></a>
      </button>
      

 
  </nav> 
   <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
   </script>
 </div>
 </div>
</div>
<?php
 }else{
 ?>
        
    <nav class="navbar fixed-top">
     
       <button class="btn " type="button"> 
           <a href="events.php" class="fa fa-envelope"></a>
       </button>

      <button class="btn " type="button"> 
           <a href="event-list.php" class="fa fa-list-alt"></a>
      </button>

      <button class="btn " type="button"> 
           <a href="login.php" class="fa fa-user"></a>
      </button>

      <button class="btn" type="button"> 
           <a href="Register.php" class="fa fa-edit"></a>
       </button>

    </nav>

 <?php  
 }
 ?>
</body>
</html>