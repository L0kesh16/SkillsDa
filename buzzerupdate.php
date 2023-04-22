<?php

		function buzz(){	
include('../studentpage/connection.php');  
$sql = "select buzzervalue from buzzer order by time desc";
$result = mysqli_query($con, $sql);
$buz = mysqli_fetch_array($result);
		$val=1;
		 if($buz[0]==0){
            $val=1;
		 }
		 else{	
            $val=0;
		 }
		 $sql = "INSERT INTO `buzzer` (`buzzervalue`) VALUES ($val)";
		 $result = mysqli_query($con, $sql);
		}
        	buzz();

		?>