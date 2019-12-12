<?php
 $exp_date="2019/07/3";
 $today_date=date('Y/m/d');

 //now convert to strtotime
 $exp=strtotime($exp_date);
 $td=strtotime($today_date);
 
 //now compare by using if logic
 if($td>$exp)
 {
 	//count how many days 
 	$diff=$td-$exp;
 	$x=abs(floor($diff/(60*60*24)));
 	echo "produce expire";
 	echo "<br/>Already expired Day:".$x;
 }else{
 	$diff=$td-$exp;
    $x=abs(floor($diff/(60*60*24)));	
 	echo "product not expire";
 	echo "<br/>Days:".$x." left.";
 }
 ?>