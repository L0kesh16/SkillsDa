
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
						
						$con = new mysqli('localhost','root','','skillsda');

						$query = $con->query("
						SELECT 
						  x as temp,
							y as value
						FROM temperaturesensorgraph
						GROUP BY temp
					  ");
					
					  foreach($query as $data)
					  {
						$temp[] = $data['temp'];
						$value[] = $data['value'];
					  }
					
					?>
					
					
					<div style="min-width:400px ; max-width:700px">
					  <canvas id="myChart"></canvas>
					</div>
					 
					<script>
					  const labels = <?php echo json_encode($temp) ?>;
					  const data = {
						labels: labels,
						datasets: [{
						  label: 'Temperature Sensor',
						  data: <?php echo json_encode($value) 
						?>,
						  backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 205, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(201, 203, 207, 0.2)'
						  ],
						  borderColor: [
							'rgb(255, 99, 132)',
							'rgb(255, 159, 64)',
							'rgb(255, 205, 86)',
							'rgb(75, 192, 192)',
							'rgb(54, 162, 235)',
							'rgb(153, 102, 255)',
							'rgb(201, 203, 207)'
						  ],
						  borderWidth: 1
						}]
					  };
					
					  const config = {
						type: 'line',
						data: data,
						options: {
						  scales: {
							y: {
							  beginAtZero: true
							}
						  }
						},
					  };
					
					  var myChart = new Chart(
						document.getElementById('myChart'),
						config
					  );
					</script>