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
    margin-top:150px;
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
   .footer{
    margin-top:120px;
   }
</style>
</head>
<body>
<div class="container">
   <h4><?php echo $row['evename'] ?></h4>
   <?php
  //if(isset($_POST['name'])&&($_POST['email'])&&($_POST['phone'])){
  if(isset($_POST['submit'])){
   $msg="";

   if(is_numeric($_POST['name'])){
      $msg= "<p class='alert alert-danger'>Name must be in String Format</p>";
    }/*else {
      $name = test_input($_POST["name"]);
    }*/

  if(isset($_POST['email']))
    {
     
      $result = mysqli_query($conn, "SELECT email FROM attendees WHERE attendees.event_id=$id AND email = '".$_POST['email']."' ");
      $count = mysqli_num_rows($result);
      if($count >= 1 )
      {
        $msg=  "<p class='alert alert-danger'>Email already exist.. </p>";
      }/*else {
      $email = test_input($_POST["email"]);
     }*/
    }
    
    if(isset($_POST['phone']))
    {
     if(!is_numeric($_POST['phone']))
     {
      $msg=  "<p class='alert alert-danger'>Phone No. must be Numeric</p>";
     }else if(strlen($_POST['phone'])<11){
      $msg= '<p class="alert alert-danger">Phone Number must be less than 12</p>';
    }/*else {
      $phone = test_input($_POST["phone"]);
    }*/
  }
    if($msg!="")
    {
       echo $msg;
    }

    else{

  
      
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $event_id=$_POST['event_id'];
      $ticket_id=$_POST['ticket_id'];


  
  $sql="INSERT INTO attendees(name,email,phone,event_id,ticket_id,status,created_date,modified_date)
       VALUES('$name','$email','$phone','$event_id','$ticket_id','0',now(), now())";
  mysqli_query($conn,$sql);
    

 if(isset($sql)){
 $attendees=$_POST['attendees']-1;
  $qty ="UPDATE event SET attendees ='$attendees' WHERE id=$event_id";
 mysqli_query($conn,$qty);
}
  ini_set('display_errors',1); error_reporting(E_ALL);
  $query = array(
    'name' => $_POST['name'], 
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'event_id' =>$_POST['event_id'],
    'evename'=>$_POST['evename'],
    'attendees'=>$_POST['attendees'],
    'ticket_id'=>$_POST['ticket_id']
    );

  $query = http_build_query($query);
  header("location:download.php?$query");
  }
 }  

    ?>
		<table>
   
    <?php   
    //Form validation
  
  


   
 
     
  
    if(isset($row['id'])){
  	
    $event_id=$row['id'];
    //$event_id = test_input($_POST["event_id"]);
    $evename=$row['evename'];
    $attendees=$row['attendees'];
    $a=rand(100,500);
    $b=rand(300,700);
    $ticket_id=$a*$b;

   /*  if(isset($_POST['submit'])){
     var_dump($_POST);
     header("location:qr_generator.php");
    } 
    ?>*/ 
    ?>

  <form action="" role="form" method="post" enctype="multipart/form-data">  
  
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

      <input type="submit" name="submit"  class="btn btn-info" value="OK">
		  </tr>
		  </form>
	   
	    </table>
      <?php } ?>

     
    
</div>

<br/>
<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</body>
</html>
