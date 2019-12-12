<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
*{
  margin:0;
  padding:0;
  font-family:Century Gothic;
}
header{
	background-image:url(img/slide1.jpg);
	height:100vh;
	background-size:cover;
	background-position:center;
}
ul{
	float:right;
	list-style-type:none;
	margin-top:25px;
}
ul li{
	display:inline-block;
}
ul li a{
	text-decoration:none;
	color:#fff;
	padding:5px 20px;
	border:1px solid transparent;
	transition:0.6s ease;
}
ul li a:hover{
	background-color:#fff;
	text-decoration:none;
	color:#000;
}
ul li.active a{
	background-color:#fff;
	color:#000;
}
.logo img{
	float:left;
	width:150px;
	height:auto;
}
.main{
	max-width:1200px;
	margin:auto;
}
</style>
</head>
<body>
 <header>
  <div class="main">
   <div class="logo">
    <img src="img/logo.png">
    </div>
   <ul>
    <li class="active"><a href="">Home</a></li>
    <li><a href="">Service</a></li>
    <li><a href="">Contact Us</a></li>
    <li><a href="">About Us</a></li>
    <li><a href="">Terms and Conditions</a></li>
   </ul>
  </div>
  </header>
</body>
</html>