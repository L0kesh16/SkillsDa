<style>
    @import url('https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei');



.solecontain {
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

.solecontain h3 {
	color: #111;
	margin: 0 0 25px;
	position: relative;
	z-index: 2;
}

.checkbox-solecontain {
	display: inline-block;
	position: relative;
}

.checkbox-solecontain label {
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

.checkbox-solecontain label::after {
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

.checkbox-solecontain input {
	visibility: hidden;
	position: absolute;
	z-index: 2;
}

.checkbox-solecontain input:checked + label + .active-circle {
	transform: translate(-50%, -50%) scale(15);
}

.checkbox-solecontain input:checked + label::after {
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



.checkbox-solecontain.blue .active-circle,
.checkbox-solecontain.blue input:checked + label {
	background-color: lightblue;
}

    </style>


<?php

include('../studentpage/connection.php');  
$sql = "select solenoid  from solenoid order by time desc";
$result = mysqli_query($con, $sql);
$que = mysqli_fetch_array($result);

?>


<div class="solecontain m-5 mx-lg-auto">
	<h3>Solenoid</h3>
	<div class="checkbox-solecontain blue">
		<input type="checkbox" checked id="tog" onclick="updatesolenoid()" />
		<label for="tog"></label>
		<div class="active-circle"></div>
	</div>
</div>

<script>
    var sole =<?php echo json_encode($que); ?>;
	var val =document.getElementById("tog");
	
	if(sole[0]==1)
	{
		val.setAttribute("checked","");
	}else{
		val.removeAttribute("checked");
	}
	function updatesolenoid() {
						$.ajax({
							url: "../studentpage/solenoidupdate.php",
							data: {
							'function':'soleupdate'
							},
							success: function(response) {
								
							}
						});
						}
	</script>
	
