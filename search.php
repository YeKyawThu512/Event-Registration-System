<?php
 include("config.php");


if(isset($_POST['search'])&& strlen($_POST['search'])>=4){
 	$searchq=$_POST['search'];
 	$searchq=preg_replace("#[^0-9a-z]#","",$searchq);
 	$query=mysqli_query($conn,"SELECT * FROM attendees WHERE ticket_id LIKE '%$searchq%' OR name LIKE '%$searchq%'") or die("could not search!");
 	$count=mysqli_num_rows($query);
 	if($count==0){
 		$output='There was no search results!';
 	}else{
 		while($row=mysqli_fetch_array($query)){
 		    $status=$row['Status'];
            if($status==0){
            	$status=1;
            }
 		   $name=$row['name'];
 		   $email=$row['email'];
 		   $ticket_id=$row['ticket_id'];
           echo "<div class='alert alert-success'>".$name.' h'.$email.' '.$status."</div>";
 		  
 		}
 	}
 }else{
 	echo "You should write at least 4 ";
 }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    </head>
 <body>
<form action="search_result.php" method="post">  
 <input type="text" name="search" placeholder="Search for members" />  
<input type="submit" value=">>"/>  
</form>  

    </body>
</html>