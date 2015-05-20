<?php

session_start();
$temp=$_SESSION['user_username'];
if(isset($_POST)){
    require '../_database/database.php';
    
    

    $Destination = '../userfiles/avatars';
    if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
        $NewImageName= 'default.png';
        move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
    }
    else{
        $RandomNum   = rand(0, 9999999999);
        $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
        $ImageType = $_FILES['ImageFile']['type'];
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
    }
    $sql5="UPDATE user SET user_avatar='$NewImageName' WHERE user_username = '$temp'";
    $sql6="INSERT INTO user (user_avatar) VALUES ('$NewImageName') WHERE user_username = '$temp'";

    $sql7="UPDATE schedule SET user_avatar='$NewImageName' WHERE tutor_name = '$temp'";
    $sql8="INSERT INTO schedule (user_avatar) VALUES ('$NewImageName') WHERE tutor_name = '$temp'";


    $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$temp'");
    $result1 = mysqli_query($database,"SELECT * FROM schedule WHERE tutor_name = '$temp'");


    if( mysqli_num_rows($result) > 0) {
        if(!empty($_FILES['ImageFile']['name'])){
            mysqli_query($database,$sql5)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$temp");
        }
    } 
    else {
        mysqli_query($database,$sql6)or die(mysqli_error($database));
        header("location:../edit-profile.php?user_username=$temp");
    }  



    if( mysqli_num_rows($result1) > 0) {
        if(!empty($_FILES['ImageFile']['name'])){
            mysqli_query($database,$sql7)or die(mysqli_error($database));
     
        }
    } 
    else {
        mysqli_query($database,$sql8)or die(mysqli_error($database));

    }  


    $user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];

    $user_shortbio=$_POST['user_shortbio'];     
    $user_dob=$_POST['user_dob'];
    $user_gender=$_POST['user_gender'];
    $user_country=$_POST['user_country'];
    $user_address=$_POST['user_address'];
    $user_course=$_POST['user_course'];
    $user_contact=$_POST['user_contact'];


    $sql3="UPDATE user SET user_firstname='$user_firstname',user_lastname='$user_lastname',user_address='$user_address',user_email='$user_email',user_password='$user_password',user_shortbio='$user_shortbio',user_dob='$user_dob',user_gender='$user_gender',user_country='$user_country',user_course='$user_course',user_contact='$user_contact' WHERE user_username = '$temp'";
    mysqli_query($database,$sql3)or die(mysqli_error($database));
    header("location:../edit-profile.php?user_username=$temp&request=profile-update&status=success");
}    
?>