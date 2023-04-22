<?php
    
		function pump(){	
            include('../studentpage/connection.php');  
            $sql = "select pumpvalue  from pump order by time desc";
            $result = mysqli_query($con, $sql);
            $col = mysqli_fetch_array($result);
        
		$val=1;
		 if($col[0]==0){
            $val=1;
		 }
		 else{	
            $val=0;
		 }
         
		 $sql = "INSERT INTO `pump` (`pumpvalue`) VALUES ($val)";
		 $result = mysqli_query($con, $sql);
		}
        	pump();

		?>
           