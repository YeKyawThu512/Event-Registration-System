<?php
 session_start();
      
include("config.php");
include("title_bar.php");

  

 $id = $_GET['id'];
 $event = mysqli_query($conn, "SELECT * FROM event WHERE id = $id");
 $row = mysqli_fetch_assoc($event);
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Register Here</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.container{
    margin-top:70px;
  background-color:#f5f5f5;
  border-radius:10px;
  }
h4{
  text-align:center;
  color:#fff;
  margin:8px 0px 30px 0px;
  background-color:#81d4fa;
  padding:20px;
  border-radius:10px;
  font-weight:;
}
.btn-info{
    float:left;
   }
</style>
</head>
<body>
<div class="container">
   <h4><?php echo $row['evename'] ?></h4>              
    <table>

<?php
  if(isset($row['id']))
  {
    $event_id=$row['id'];
    $evename=$row['evename'];
    $attendees=$row['attendees'];
    $a=rand(100,500);
    $b=rand(300,700);
    $ticket_id=$a*$b;
    
    

    ?>


 <?php
 if(isset($_POST['submit'])){
  
    if(is_numeric($_POST['name']))
    {
     echo "<p class='alert alert-danger'>Name must be in String Format</p>";
    }
    if(isset($_POST['email']))
    {
     $result = mysqli_query($conn, "SELECT email FROM attendees WHERE email = '".$_POST['email']."' ");
     $count = mysqli_num_rows($result);
     if($count >= 1 )
     {
      echo "<p class='alert alert-danger'>Email already exist.. </p>";
     }
    }
    if(!is_numeric($_POST['phone']))
    {
     echo "<p class='alert alert-danger'>Phone No. must be Numeric</p>";
    }
    if(strlen($_POST['phone'])<11)
    {
     echo'<p class="alert alert-danger">Phone Number must be less than 12</p>';
    }
  }else{ 
    ?>
<form action="" role="form" method="post" enctype="multipart/form-data">
<?php } ?>
    <input type="hidden" name="event_id" value="<?php echo $event_id ?>">
    <input type="hidden" name="evename" value="<?php echo $evename ?>">
    <input type="hidden" name="attendees" value="<?php echo $attendees ?>">
    <input type="hidden" name="ticket_id" value="<?php echo $ticket_id ?>">
       
   
      <div class="form-group">
         <div class="col-xs-9">
           <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
          </div>
        </div>
        
        <div class="form-group">
         <div class="col-xs-9">
           <input type="text" name="email" id="email" class="form-control" placeholder="Example@gmail.com" required>
          </div>
        </div>
    
         <div class="form-group">
          <div class="col-xs-9">
           <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" required>
          </div>
        </div>

      <tr>
  
      <td><input type="submit" name="submit" class="btn btn-info" value="OK"></td>

      </tr>
      
      </form>  
     <?php } ?>
      </table>


</div>
</body>
</html>