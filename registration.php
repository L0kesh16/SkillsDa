<?php
    require('connection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $sql = "select username from userlogin where username = '$username'";
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $role    = stripslashes($_REQUEST['role']);
        $role    = mysqli_real_escape_string($con, $role);
        
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){ 
            
            echo "
            <script>
                if(confirm('Username already exist'))
                {
                    window.location.href = 'index.html';
                }
                else
                {
                    window.location.href = 'index.html';
                }
            </script>
            ";
        }  
        else{
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $query    = "INSERT into `userlogin` (username, password, email, name, role)
                     VALUES ('$username', '$password', '$email', '$name', '$role')";
        $query1 = "INSERT INTO `subscription` (`email`, `home`, `agri`, `health`, `environment`, `parking`, `power`, `traffic`, `industry`, `water-treatment`, `waste-management`, `data-center`) 
        VALUES ('$username', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none');";

        $result   = mysqli_query($con, $query);
        $result1   = mysqli_query($con, $query1);
        if ($result) {
            echo "
                  <h3><script> if (confirm('Registered Login Successfully')) {
                    window.location.href = 'index.html'; 
                } else {
                    window.location.href = 'index.html'; 
                } </script></h3><br/>
                ";
        } //else {
        //     echo "<div class='form'>
        //           <h3>Required fields are missing.</h3><br/>
        //           <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
        //           </div>";
        // }
    }
}
?>
<script>
 
 

</script>