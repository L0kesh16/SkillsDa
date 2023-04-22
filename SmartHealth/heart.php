<style>
  a{
  color:#09f;
}

/* FONT AWESOME GENERIC BEAT */ 
.fa-beat {
  animation:fa-beat 5s ease infinite;
}
@keyframes fa-beat {
  0% {
    transform:scale(1);
  }
  5% {
    transform:scale(1.25);
  }
  20% {
    transform:scale(1);
  }
  30% {
    transform:scale(1);
  }
  35% {
    transform:scale(1.25);
  }
  50% {
    transform:scale(1);
  }
  55% {
    transform:scale(1.25);
  }
  70% {
    transform:scale(1);
  }
}



.heart {
  color:red;
}
  </style>

 <?php 
include('../studentpage/connection.php');  
$sql = "select heart  from smarthealth where `sno` = '1'";
$result = mysqli_query($con, $sql);
$heartquery = mysqli_fetch_array($result);

?>

<div style="width:300px">
<p class="heart ml-5 " style="margin-top:25px">
  <i class="fa fa-heart fa-4x fa-beat" style="font-size:200px"></i>
</p>
<h3  id="heartvalue"class="heart fa-beat mt-4 " style="margin-left:120px">33</h3>

</div>
<script>
  const heart="<?php echo $heartquery[0]; ?>";
    document.getElementById("heartvalue").innerHTML=	heart;
  </script>

