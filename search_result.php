<?php
 include("config.php");

 if(isset($_POST['search'])&& strlen($_POST['search'])>=4){
 	$searchq=$_POST['search'];
 	$searchq=preg_replace("#[^0-9a-z]#","",$searchq);
 	$query=mysqli_query($conn,"SELECT * FROM attendees WHERE ticket_id=$searchq") or die("could not search!");
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
           echo "<tr class='alert alert-success'>".$name.' '.$email.' '.$status."</tr>";
           
 		}
 	}
 }else{
 	echo "You should write at least 4 ";
 }

  print('');
 

 

 ?>