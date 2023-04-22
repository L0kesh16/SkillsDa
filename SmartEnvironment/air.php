

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
	
<div id='air' style="height: 500px;width: 400px; " ><h4 class="head">Air Sensor</h4> </div>

<?php

include('../studentpage/connection.php');  
$sql = "select air  from smartenvironment where sno ='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


?>
<script>
   var air = <?php echo json_encode($row) ?>;
   airvalue=parseInt(air[0]);
   
    var myConfig2 = {
  "type":"gauge",

  
  "scale-r":{
    "aperture":200, //Scale Range
    "values":"0:100:5", //and minimum, maximum, and step scale values.
    "ring":{  //Gauge Ring
      "size":10,
      "background-color":"lightgreen"
    }
  },
  
  "plot":{
    "csize":"5%",
    "size":"100%",
    "background-color":"#000000",
    "valueBox": {
 	    "placement": 'center',
 	    "text":'<br><br><br>'+ airvalue+'', //default
 	    "fontSize":35,
    },
    "animation":{ //Animation object
 	    "effect":2,
 	    "method":3,
 	    "sequence":1,
 	    "speed":3000
 	  },
    
    },
  "series":[
    {
      "values":[airvalue],
      "indicator":[10,0,0,0,0.3],
      "text":"R-Base (pos value --> rounded base)"
    },
  ],
  
};

zingchart.render({ 
	id : 'air', 
	data : myConfig2, 
	height : "100%", 
	width: "100%"
});
    </script>