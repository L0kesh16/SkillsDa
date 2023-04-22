
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>

<div id='vibrator' style="height: 400px;width: 400px;"><h4 class="txt-color ml-5 ">Vibration Sensor</h4></div>
<?php

include('../studentpage/connection.php');  
$sql = "select vibration  from industry where sno ='1'";
$result = mysqli_query($con, $sql);
$que = mysqli_fetch_array($result);


?>
<script>
     var vib = <?php echo json_encode($que) ?>;
   vib=parseInt(vib[0]);
    var myConfig2 = {
  "type":"gauge",

  
  "scale-r":{
    "aperture":200, //Scale Range
    "values":"0:1000:100", //and minimum, maximum, and step scale values.
    "ring":{  //Gauge Ring
      "size":10,
      "background-color":"green"
    }
  },
  
  "plot":{
    "csize":"5%",
    "size":"100%",
    "valueBox": {
 	    "placement": 'center',
 	    "text":'<br><br><br>'+ vib+' HZ', //default
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
      "values":[vib],
      "indicator":[10,0,0,0,0.3],
      "text":"R-Base (pos value --> rounded base)"
    },
  ],
  
};

zingchart.render({ 
	id : 'vibrator', 
	data : myConfig2, 
	height : "100%", 
	width: "100%"
});
    </script>