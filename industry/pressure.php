
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>

<div id='pressure' style="height: 400px;width: 400px;" class="ml-lg-5"><h4 class="txt-color ml-5 ">pressure Sensor</h4></div>
<?php

include('../studentpage/connection.php');  
$sql = "select pressure from industry where sno ='1'";
$result = mysqli_query($con, $sql);
$col = mysqli_fetch_array($result);


?>
<script>
     var pre = <?php echo json_encode($col) ?>;
   pre=parseInt(pre[0]);
    var myConfig2 = {
  "type":"gauge",

  
  "scale-r":{
    "aperture":200, //Scale Range
    "values":"0:100:10", //and minimum, maximum, and step scale values.
    "ring":{  //Gauge Ring
      "size":10,
      "background-color":"red"
    }
  },
  
  "plot":{
    "csize":"5%",
    "size":"100%",
    "valueBox": {
 	    "placement": 'center',
 	    "text":'<br><br><br>'+ pre+' Bar', //default
 	    "fontSize":35,
    },
    "background-color":"#000000",
    "animation":{ //Animation object
 	    "effect":2,
 	    "method":3,
 	    "sequence":1,
 	    "speed":3000
 	  }
    },
  "series":[
    {
      "values":[pre],
      "indicator":[10,0,0,0,0.3],
      "text":"R-Base (pos value --> rounded base)"
    },
  ],
  
};

zingchart.render({ 
	id : 'pressure', 
	data : myConfig2, 
	height : "100%", 
	width: "100%"
});
    </script>