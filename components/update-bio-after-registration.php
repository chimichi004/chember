<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';


        session_start();


        $user_shortbio=$_POST['user_shortbio'];
        $user_dob=$_POST['user_dob'];
        $user_gender=$_POST['user_gender'];
        $user_country=$_POST['user_country'];
        $user_address=$_POST['user_address'];
        $user_relationship=$_POST['user_relationship'];
        $user_course=$_POST['user_course'];
        $user_contact=$_POST['user_contact'];


        $sql3="UPDATE user SET user_shortbio='$user_shortbio',user_dob='$user_dob',user_gender='$user_gender',user_country='$user_country',user_address='$user_address',user_relationship='$user_relationship',user_course='$user_course',user_contact='$user_contact' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];



        $sql4="INSERT INTO user (user_shortbio,user_dob,user_gender,user_country,user_address,user_relationship,user_course,user_contact) VALUES ($user_shortbio,$user_dob,$user_gender,$user_country,$user_address,$user_relationship,$user_course,$user_contact) WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }  
    }    
?>