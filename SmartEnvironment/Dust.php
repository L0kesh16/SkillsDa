

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>

<div id='dust' style="height: 500px;width: 400px;"><h4 class="head">Dust Sensor</h4></div>
<?php

include('../studentpage/connection.php');  
$sql = "select dust  from smartenvironment where sno ='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


?>
<script>
     var dust = <?php echo json_encode($row) ?>;
   dustvalue=parseInt(dust[0]);
    var myConfig2 = {
  "type":"gauge",

  
  "scale-r":{
    "aperture":200, //Scale Range
    "values":"0:100:5", //and minimum, maximum, and step scale values.
    "ring":{  //Gauge Ring
      "size":10,
      "background-color":"lightblue"
    }
  },
  
  "plot":{
    "csize":"5%",
    "size":"100%",
    "valueBox": {
 	    "placement": 'center',
 	    "text":'<br><br><br>'+ dustvalue+'', //default
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
      "values":[dustvalue],
      "indicator":[10,0,0,0,0.3],
      "text":"R-Base (pos value --> rounded base)"
    },
  ],
  
};

zingchart.render({ 
	id : 'dust', 
	data : myConfig2, 
	height : "100%", 
	width: "100%"
});
    </script>