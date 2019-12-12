<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
body{
	margin:0px;
	padding:0;
	font-family:'Poppins',sans-serif;
}
.banner{
	width:100%;
	height:100vh;
	overflow:hidden;
	display:flex;
	justify-content:center;
	
}
.banner video{
	position:absolute;
	top:0;
	left:0;
	object-fit: cover;
	width:100%;
	height:100%;
	pointer-events:none;
}
</style>
</head>
<body>
<div class="banner">
 <video autoplay muted loop>
  <source src="video/Bokeh.mp4" type="video/mp4">
 </video>

</body>
</html>