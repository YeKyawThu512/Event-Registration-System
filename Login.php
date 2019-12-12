<?php
include("config.php");
include("title_bar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style type="text/css">
body{
	background:url(img/slide2.jpg);
	background-size:cover;
	background-position:center;
	background-attachment:fixed;
	font-family:sans-serif;
}

.loginbox{
	margin-top:70px;

	width:320px;
	height:420px;
	background:#000;
	color:#fff;
	top:50%;
	left:50%;
	position:absolute;
	transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px 30px;
    opacity:.9;
}
.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
	left:calc(50% - 50px);
}
h1{
	margin:0;
	padding:0 0 20px; 
	text-align:center;
	font-size:22px;
}
.loginbox p{
	margin:0;
	padding:0;
	font-weight:bold;
}
.loginbox input{
	width:100%;
	margin-bottom:20px;
}
.loginbox input[type="email"],input[type="password"]
{
	border:none;
	border-bottom:1x solid #fff;
	background:transparent;
	outline:none;
	height:40px;
	color:#fff;
	font-size:16px;
}
.loginbox input[type="submit"]
{
 border:none;
 outline:none;
 height:40px;
 background:#fb2525;
 color:#fff;
 font-size:18px;
 border-radius:20px;
}
.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background:#ffc107;
	color:#000;
}
.loginbox a{
	text-decoration:none;
	font-size:12px;
	line-height:20px;
	color:darkgrey;
}
.loginbox a:hover{
	color:#ffc107;
}
</style>
</head>
<body>
<div class="container">
<div class="loginbox">
  <h1>Login Here</h1>
   <form action="Process.php" method="post">
    <?php  if(isset($_GET['account']) && $_GET['account']=="fail") {  
     ?>
    <div class="text-danger" style="text-align: center;">Invalid username or password</div>
   <?php }?>
    <p>Email</p>
    <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" required>
    <p>Password</p>
    <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password" required>
    <input type="submit" name="" value="Login">
    
    <a href="register.php">Don't have an account?</a>
   </form>
</div>
</div>


</body>
</html>