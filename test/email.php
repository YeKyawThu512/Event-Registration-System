        if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z]+\.)+[a-zA-Z]{2,6}$/i",$_POST['email']))
		{
			$msg.="<p class='alert alert-danger'>Please Enter Valid Email Address...</p>";
		}
		 if(isset($_POST['email']))
        { 
        	$mail=mysqli_real_escape_string($conn,$_POST['email']);
        	$query="SELECT * FROM users WHERE email='".$mail."'";
        	$ans=mysqli_query($conn,$query);
        	$check=mysqli_num_rows($ans);
            if($mail==$check['email']){
         	$msg.="<p class='alert alert-danger'>Email Already exists</p>";
           }

           function checkemail($email)
	{
		
		$res = mysqli_query("SELECT * FROM users WHERE email='$email'");
		$cow=mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($cow);
		if($count>0){
			return false;
		}else{
			return true;
		}
	}
	if(!checkemail($_POST['email'])) {
            $msg.= "<p class='alert alert-danger'>Email already exists<br>";
        }



        if(filter_var($mail,FILTER_VALIDATE_EMAIL)==false){
		     $msg.="<p class='alert alert-danger'>Please Enter Valid Email Address...</p>";
		    }else