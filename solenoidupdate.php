<?php
		function soleupdate(){	
            include('../studentpage/connection.php');  
            $sql = "select solenoid  from solenoid order by time desc";
            $result = mysqli_query($con, $sql);
            $col = mysqli_fetch_array($result);
			
		$res=1;
		 if($col[0]==0){
            $res=1;
		 }
		 else{	
            $res=0;
		 }
         
		 $sql = "INSERT INTO `solenoid` (`solenoid`) VALUES ($res)";
		 $result = mysqli_query($con, $sql);
		}
        soleupdate();
	
		?>
           