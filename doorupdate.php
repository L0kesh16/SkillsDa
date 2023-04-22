<?php

		function door(){	
			include('../studentpage/connection.php');  
			$sql = "select door  from smarthome order by doortime desc";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);
		$val=1;
		 if($row[0]==0){
            $val=1;
		 }
		 else{	
            $val=0;
		 }
		 $sql = "INSERT INTO `smarthome` (`door`) VALUES ($val)";
		 $result = mysqli_query($con, $sql);
		}
        	door();

		?>