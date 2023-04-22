<style>
    @import url('https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei');



.doorcontainer {
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

.doorcontainer h3 {
	color: #111;
	margin: 0 0 25px;
	position: relative;
	z-index: 2;
}

.checkbox-doorcontainer {
	display: inline-block;
	position: relative;
}

.checkbox-doorcontainer label {
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

.checkbox-doorcontainer label::after {
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

.checkbox-doorcontainer input {
	visibility: hidden;
	position: absolute;
	z-index: 2;
}

.checkbox-doorcontainer input:checked + label + .active-circle {
	transform: translate(-50%, -50%) scale(15);
}

.checkbox-doorcontainer input:checked + label::after {
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



.checkbox-doorcontainer.green .active-circle,
.checkbox-doorcontainer.green input:checked + label {
	background-color: lightgreen;
}

    </style>




<?php

include('../studentpage/connection.php');  
$sql = "select door  from smarthome order by doortime desc";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);


?>


<div class="doorcontainer m-5">
	<h3>door</h3>
	<div class="checkbox-doorcontainer green">
		<input type="checkbox" checked id="doorid" onclick="updatedoor()" />
		<label for="doorid"></label>
		<div class="active-circle"></div>
	</div>
</div>

<script>
						const doorvalue="<?php echo $row[0]; ?>";
						var key=document.getElementById("doorid");
				
						
						if(doorvalue>0)
						{
							key.setAttribute("checked","");
						}
						else{
							key.removeAttribute("checked");
						}
						function updatedoor() {
						$.ajax({
					
							url: "doorupdate.php",
							data: {
							'function': 'door'
							},
							success: function(response) {
                                console.log(response);
							}
						});
						}

						</script>
