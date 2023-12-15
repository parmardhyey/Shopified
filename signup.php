



<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '$password', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if (!$result) {
            echo "Error!";
        } else {
            echo "<script>window.alert('Registration Successful Continue with Login!'); 
                  window.location='account.php';
                  </script>";
                }
    } 
?>
 
    
      
      

