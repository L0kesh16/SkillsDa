<?php      
    session_start();

?>

<?php
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from userlogin where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION["uname"]=$username;  

         if($count == 1){  
            header("Location: ../studentpage/main.php");  
         }  
         else{  
             echo "<script>if (confirm('Login failed')) {
                window.location.href = 'index.html'; 
            } else {
                window.location.href = 'index.html'; 
            }</script>";
         }
?>  

