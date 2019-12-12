<?php
	//connect to the server and database
 include("config.php");
 
 $mail=$_POST['email'];
	if(isset($_POST['submit'])){//Form validation
	
		$msg="";
	
	    if(is_numeric($_POST['name']))
        {
         	$msg.="<p class='alert alert-danger'>Name must be in String Format</p>";
		}
		if(isset($_POST['email']))
		{
		 
			$result = mysqli_query($conn, "SELECT email FROM users WHERE email = '".$_POST['email']."' ");
			$count = mysqli_num_rows($result);
			if($count >= 1 )
			{
				$msg.="<p class='alert alert-danger'>Email already exist.. </p>";
			}
		}

		if(!is_numeric($_POST['phone']))
        {
         	$msg.="<p class='alert alert-danger'>Phone No. must be Numeric</p>";
		}
		if(strlen($_POST['phone'])<11)
		{
			$msg.='<p class="alert alert-danger">Phone Number must be less than 12</p>';
		}	
		if(($_POST['password'])!=($_POST['confirm_pwd']))
		{
			$msg.='<p class="alert alert-danger">The two passwords do not match!</p>';
		}
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}

		else//if data exists correct formation, put them into database
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$password=$_POST['password'];
			$confirm_pwd=$_POST['confirm_pwd'];
			$cmp_name=$_POST['cmp_name'];

			
            $result=mysqli_query($conn,"INSERT into users(name,email,phone,password,confirm_pwd,cmp_name,user_level,created_date,modified_date)
			values('$name','$email','$phone','$password','$confirm_pwd','cmp_name','2',now(),now())")or die("Failed to query database".mysql_error());

            $row=mysqli_fetch_array($result);

			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>