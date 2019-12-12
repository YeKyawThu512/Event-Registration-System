<?php
 session_start();
      
include("config.php");
include("title_bar.php");
 
  

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
body{
  background:url(img/slide.5.jpg);
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
  font-family:sans-serif;
}

.container{
  height:30%;
  margin-top:150px;
  padding:30px;
	background-color:#f5f5f5;
	border-radius:10px;
	}
.alert-success{
  padding:20px;
}
.btn-info{
	  margin-left:45%;

	 }
   .footer{
    margin-top:190px;
   
   }
</style>
</head>
<body>
<div class="container">
      <?php
         if(isset($_POST['submit'])){
  $query = array(
    'name' => $_POST['name'], 
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'event_id' =>$_POST['event_id'],
    'evename'=>$_POST['evename'],
    'ticket_id'=>$_POST['ticket_id']
    );

  $query = http_build_query($query);
  header("location:attendees_pdf.php?$query");
  
  }?>


   <form action="" method="post">
      <?php
echo '<p class="alert alert-success" style="text-align:center">You are successfully Registered..</p>';
?>

      <input type="button" name="submit" id="submit" class="btn btn-info" value="Click Here" data-toggle="modal" data-target="#confirm-submit" class="btn btn-default">

     
   </form>
</div>
    <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
               
 
           
            <div class="modal-body">
               
                <!-- We display the details entered by the user here -->
                <table class="table">
                    <tr>
                      <p align="center"> Here your admission ticket!</p>
                      <p align="center">..please download it..</p>

                    </tr>
                   
                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <form action="" method="post">
                <input type="hidden" name="event_id" value="<?php echo $_GET['event_id'] ?>">
   <input type="hidden" name="evename" value="<?php echo $_GET['evename'] ?>">
   <input type="hidden" name="attendees" value="<?php echo $_GET['attendees'] ?>">
   <input type="hidden" name="ticket_id" value="<?php echo $_GET['ticket_id'] ?>">
   <input type="hidden" name="name" value="<?php echo $_GET['name'] ?>">
   <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">
   <input type="hidden" name="phone" value="<?php echo $_GET['phone'] ?>">
                <input type="submit"  name="submit" value="download" id="submit" class="btn btn-success success">
                </form>
            </div>
        </div>
    </div>
</div>

<br/>
<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</body>
</html>
