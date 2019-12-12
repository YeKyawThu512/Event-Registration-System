<?php
 session_start();
 include("config.php");

if(isset($_POST['email']) && isset($_POST['password']))
{
$email = $_POST['email'];
$password = $_POST['password'];

 $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' and password = '$password'");
 $row  = mysqli_fetch_array($result);
	if(is_array($row)){
	$_SESSION['auth']=true;
	$_SESSION['id'] = $row['id'];
	$_SESSION['name'] = $row['name'];
    header("location:view-event.php?account=success");
}
else {  
	header("location:login.php?account=fail");
	
}
}
?>

        
 	
 	

