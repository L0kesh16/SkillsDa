<style>
    @import url('https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei');



.contain {
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	overflow: hidden;
	text-align: center;
	width: 280px;
	height: 170px;
}

.contain h3 {
	color: #111;
	margin: 0 0 25px;
	position: relative;
	z-index: 2;
}

.checkbox-contain {
	display: inline-block;
	position: relative;
}

.checkbox-contain label {
	background-color: #aaa;
	border: 1px solid #fff;
	border-radius: 20px;
	display: inline-block;
	position: relative;
	transition: all 0.3s ease-out;
	width: 45px;
	height: 25px;
	z-index: 2;
}

.checkbox-contain label::after {
	content: ' ';
	background-color: #fff;
	border-radius: 50%;
	position: absolute;
	top: 1.5px;
	left: 1px;
	transform: translateX(0);
	transition: transform 0.3s linear;
	width: 20px;
	height: 20px;
	z-index: 3;
}

.checkbox-contain input {
	visibility: hidden;
	position: absolute;
	z-index: 2;
}

.checkbox-contain input:checked + label + .active-circle {
	transform: translate(-50%, -50%) scale(15);
}

.checkbox-contain input:checked + label::after {
	transform: translateX(calc(100% + 0.5px));
}

.active-circle {
	border-radius: 50%;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(calc(-50% - 10px), calc(-50% - 2px)) scale(0);
	transition: transform 0.6s ease-out;
	width: 30px;
	height: 30px;
	z-index: 1;
}



.checkbox-contain.green .active-circle,
.checkbox-contain.green input:checked + label {
	background-color: lightgreen;
}

    </style>


<?php

include('../studentpage/connection.php');  
$sql = "select pumpvalue  from pump order by time desc";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>


<div class="contain m-5">
	<h3>PUMP</h3>
	<div class="checkbox-contain green">
		<input type="checkbox" checked id="toggle" onclick="updatepump()" />
		<label for="toggle"></label>
		<div class="active-circle"></div>
	</div>
</div>

<script>
    var pump =<?php echo json_encode($row); ?>;
	var val =document.getElementById("toggle");

	if(pump[0]==1)
	{
		val.setAttribute("checked","");
	}else{
		val.removeAttribute("checked");
	}
	function updatepump() {
						$.ajax({
							url: "pumpupdate.php",
							data: {
							'function': 'pump'
							},
							success: function(response) {
							}
						});
						}
	</script>
	
