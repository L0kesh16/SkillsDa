<?php
session_start();

?>

<?php
    include('connection.php');  

    $uname=$_SESSION["uname"];
    $sql = "SELECT * FROM subscription where email='$uname'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);


?>
<script>
    var sub =<?php echo json_encode($row); ?>;
    var topic=document.getElementsByClassName("nav-item");

    console.log(topic);
    for(var i=1;i<12;i++)
    {
        console.log(sub[i]);
        topic[i-1].style.display=sub[i];
    }

    </script>