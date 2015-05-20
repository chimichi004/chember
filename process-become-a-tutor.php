<?php
    require_once('components/authentication.php');
    require_once ('_database/database.php');

        $Destination = 'userfiles/avatars';

        $subject=$_POST['subject'];
        $dates=$_POST['schedule'];
        $froms=$_POST['from'];
        $to=$_POST['to'];
        $rate=$_POST['rate'];

        $time_from  = DATE("g:i a", STRTOTIME("$froms"));
        $time_to  = DATE("g:i a", STRTOTIME("$to"));

        $avatar = $_SESSION['avatar'];
        $lastname = $_SESSION['lastname'];


        $sql="INSERT INTO schedule(tutor_name,user_avatar,user_lastname,subject,dates,time_from,time_to,rate) VALUES('$user_username','$avatar','$lastname','$subject','$dates','$time_from','$time_to','$rate')";
       

        mysqli_query($database,$sql) or die(mysqli_error($database));
        
      
        header('location: success.php');
?>.