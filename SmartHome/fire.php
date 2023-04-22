<style>
    @import url('https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei');



.firecontainer {
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

.firecontainer h3 {
	color: #111;
	margin: 0 0 25px;
	position: relative;
	z-index: 2;
}

.checkbox-firecontainer {
	display: inline-block;
	position: relative;
}

.checkbox-firecontainer label {
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

.checkbox-firecontainer label::after {
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

.checkbox-firecontainer input {
	visibility: hidden;
	position: absolute;
	z-index: 2;
}

.checkbox-firecontainer input:checked + label + .active-circle {
	transform: translate(-50%, -50%) scale(15);
}

.checkbox-firecontainer input:checked + label::after {
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



.checkbox-firecontainer.red .active-circle,
.checkbox-firecontainer.red input:checked + label {
	background-color: red;
}

    </style>




<?php

include('../studentpage/connection.php');  
$sql = "select firevalue from fire order by time desc";
$result = mysqli_query($con, $sql);
$buz = mysqli_fetch_array($result);


?>


<div class="firecontainer m-5">
	<h3>Fire Alarm</h3>
	<div class="checkbox-firecontainer red">
		<input type="checkbox" checked id="fire"  onclick="return false" />
		<label for="fire"></label>
		<div class="active-circle"></div>
	</div>
</div>

<script>
						const firevalue="<?php echo $buz[0]; ?>";
						var key=document.getElementById("fire");
						if(firevalue>0)
						{
							key.setAttribute("checked","");
						}
						else{
							key.removeAttribute("checked");
						}
						// function updatebuzzer() {
						// $.ajax({
					
						// 	url: "buzzerupdate.php",
						// 	data: {
						// 	'function': 'buzz'
						// 	},
						// 	success: function(response) {
                        //         console.log(response);
						// 	}
						// });
						// }
			</script>
