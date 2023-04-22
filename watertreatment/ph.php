
   
    <script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
   
   <div id="ph" style=" min-width:400px; height: 330px; margin-right:80px"></div>

   <?php

include('../studentpage/connection.php');  
$sql = "select ph  from ph where `sno`= '1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


?>
    <script type="text/javascript">
         var val = <?php echo json_encode($row[0]) ?>;
         val=parseInt(val);
      var chart = JSC.chart('ph', {
        debug: true,
        legend_visible: false,
        defaultTooltip_enabled: false,
        xAxis_spacingPercentage: 0.4,
        yAxis: [
         
          {
            id: 'ax2',
            scale_range: [0, 14],
            defaultTick: { padding: 10, enabled: false },
            customTicks: [0, 300, 600, 700, 800, 850],
            line: { width: 10, color: 'smartPalette:pal2' }
          }
        ],
        defaultSeries: {
          type: 'gauge column roundcaps',
          shape: {
            label: {
              text: '%max',
              align: 'center',
              verticalAlign: 'middle',
              style_fontSize: 28
            }
          }
        },
        series: [

          {
            yAxis: 'ax2',
            name: 'Temperatures',
            palette: {
              id: 'pal2',
              pointValue: '{%yValue/14}',
              colors: [
                'darkred',
                'red',
                'red',
                'darkorange',
                'orange',
                'orange',
                'lightgreen',
                'blue',
                'blue',
                'blue',
                'violet',
                'violet',
                '',
              
              ]
            },
            points: [['x', val]]
          }
        ]
      });
    </script>

