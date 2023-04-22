

<script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
    <div id="temp" style=" height: 300px; " class="pb-2">
</div>
    <?php

include('../studentpage/connection.php');  
$sql = "select temperature  from smarthealth where sno ='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>


<script>
var val = <?php echo json_encode ($row); ?>;
console.log(val)
val=parseFloat(val[0]);

var chart = JSC.chart('temp', {
        debug: false,
        type: 'gauge ',
        legend_visible: false,
        chartArea_boxVisible: false,
        xAxis: {
          /*Used to position marker on top of axis line.*/
          scale: { range: [0, 1], invert: true }
        },
        palette: {
          pointValue: '%yValue',
          ranges: [
            { value: 0, color: 'lightblue' },
            { value: 60, color: '#77E6B4' },
            
          ]
        },
        yAxis: {
          defaultTick: { padding: 13, enabled: false },
          customTicks: [30,35,40],
          line: {
            width: 15,
            breaks_gap: 0.03,
            color: 'smartPalette'
          },
          scale: { range: [30, 40] }
        },
        defaultSeries: {
          opacity: 1,
          shape: {
            label: { align: 'center', verticalAlign: 'middle' }
          }
        },
        series: [
          {
            type: 'marker',
            name: 'Score',
            shape_label: {
              text: ""+val + "<br/> <span style='fontSize: 35'>°C</span>",
              style: { fontSize: 48 }
            },
            defaultPoint: {
              tooltip: '%yValue',
              marker: {
                outline: { width: 10, color: 'currentColor' },
                fill: 'white',
                type: 'circle',
                visible: true,
                size: 30
              }
            },
            points: [[1,val]]
          }
        ]
      });
    </script>
 
