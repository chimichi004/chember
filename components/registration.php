<?php
    session_start();
    require_once ('../_database/database.php');

        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_email=$_POST['user_email'];
        $user_username=$_POST['user_username'];
        $user_password=$_POST['user_password'];

        $_SESSION['user_username'] = $user_username;


        $sql="INSERT INTO user(user_firstname,user_lastname,user_email,user_username,user_password,user_joindate,user_avatar) VALUES('$user_firstname','$user_lastname','$user_email','$user_username','$user_password',CURRENT_TIMESTAMP,'default.jpg')";
       

        mysqli_query($database,$sql) or die(mysqli_error($database));
        
        header('Location: ../update-bio-after-registration.php?user_username='.$user_username);

?>