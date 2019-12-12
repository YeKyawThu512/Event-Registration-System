
<?php
 include("config.php");
 include("auth.php");
 include("organizer title.php");
 
 $result = mysqli_query($conn,"SELECT * FROM users WHERE id= '".$_SESSION['id']."'");
 $row    = mysqli_fetch_assoc($result);
 
 ?>
<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Welcome..</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.min.js"></script>
  </head>
<body>
 <div class="container">
  <?php 
      if(isset($_GET['account']) and $_GET['account']=="success") { ?>
        <div class="alert alert-success" style="text-align: center">
        <b>Welcome <?php echo $row['name']?></b>!! 
        </div>
    <?php
   
    }
    ?> 
    <tr class="user">
    
    <td><p><?php echo $row['name']?></p></td>
    <td><p><?php echo $row['email']?></p></td>
    <td><p><?php echo $row['cmp_name']?></p></td>
    </tr>
  
  </div>
<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
  </body>
  </html>

