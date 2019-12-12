<?php session_start();
      
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
.container{
    margin-top:90px;
	background-color:#f5f5f5;
	border-radius:10px;
	}
h3{
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
   <h3>Create Organizer Account</h3>
	<?php
		 if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';							
				}
		 if(isset($_GET['ok']))
			{
				echo '<div class="alert alert-success" style="text-align: center">You are successfully Registered..';
				echo '</div>';
				}
		?>									
		<table>
		<form action="process_register.php" role="form" method="post" enctype="multipart/form-data">

		<div class="form-group">
         <div class="col-xs-9">
           <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
          </div>
        </div>
        
        <div class="form-group">
         <div class="col-xs-9">
           <input type="email" name="email" id="email" class="form-control" placeholder="Example@gmail.com" required>
          </div>
        </div>
 
         
         <div class="form-group">
          <div class="col-xs-9">
           <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" required>
          </div>
        </div>


		 <div class="form-group">
          <div class="col-xs-9">
           <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>
        </div>

         <div class="form-group">
          <div class="col-xs-9">
           <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirmed Password" required>
          </div>
        </div>


         <div class="form-group">
          <div class="col-xs-9">
           <input type="text" name="cmp_name" id="cmp_name" class="form-control" placeholder="Name of your Company!" required>
          </div>
        </div>


		  <tr>
	
		  <td><input type="submit" name="submit"  class="btn btn-info" value="OK"></td>
		  </tr>
	    </form>
	    </table>
</div>
<br/>
<div class="clearfix visible-xs">
<?php include("footer.php"); ?>
</div>
</body>
</html>
