<?php
include('connection.php');
$sql = "SELECT  `Slot 1`, `Slot 2`, `Slot 3`, `Slot 4`, `Slot 5`, `Slot 6`, `Slot 7`, `Slot 8` FROM `smartparking` ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>
<script>
   var Reserved =0;
   var Free= 0;
   var Occupied =0;
    var arr = <?php echo json_encode ($row); ?>;
var cars=document.getElementsByClassName("input-wrap");

for(var i=0;i<8;i++)
{
  if(arr[i]==0)
  {
    cars[i].children[1].style.color="grey";
    Reserved++;

  }
  else if(arr[i]==1)
  {
    cars[i].children[1].style.color="red";
    Occupied++;

  }
  
  else 
  {
    cars[i].children[1].style.color="green";

    Free++;

  }

}
var slot =document.getElementsByClassName("slot");
  slot[0].innerHTML=Reserved;
  slot[1].innerHTML=Occupied;
  slot[2].innerHTML=Free;
</script>