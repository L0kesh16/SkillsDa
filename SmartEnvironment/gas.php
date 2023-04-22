

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>

<div id='gas' style="height: 500px;width: 400px;"><h4 class="head">Gas Sensor</h4></div>
<?php

include('../studentpage/connection.php');  
$sql = "select gas  from smartenvironment where sno ='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


?>
<script>

var gas = <?php echo json_encode($row) ?>;
   gasvalue=parseInt(gas[0]);
    var myConfig2 = {
  "type":"gauge",

  
  "scale-r":{
    "aperture":200, //Scale Range
    "values":"0:1000:100", //and minimum, maximum, and step scale values.
    "ring":{  //Gauge Ring
      "size":10,
      "background-color":"yellow"
    }
  },
  
  "plot":{
    "csize":"5%",
    "size":"100%",
    "valueBox": {
 	    "placement": 'center',
 	    "text":'<br><br><br>'+ gasvalue+'', //default
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
      "values":[gasvalue],
      "indicator":[10,0,0,0,0.3],
      "text":"R-Base (pos value --> rounded base)"
    },
  ],
  
};

zingchart.render({ 
	id : 'gas', 
	data : myConfig2, 
	height : "100%", 
	width: "100%"
});
    </script>