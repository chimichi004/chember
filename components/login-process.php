<?php
    session_start();
   
        require '../_database/database.php';




        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($database,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: authentication-check.php");
            exit();
        }
        $sql="SELECT * FROM user WHERE user_username='$username'AND user_password='$password'";
        $result=  mysqli_query($database,$sql) or die(mysqli_errno());
        $trws= mysqli_num_rows($result);
        if($trws==1){
            $rws=  mysqli_fetch_array($result);
            $_SESSION['user_username']=$rws['user_username'];
            $_SESSION['user_password']=$rws['user_password'];
            $_SESSION['lastname']=$rws['user_lastname'];
            $_SESSION['avatar']=$rws['user_avatar'];
            header("location:../edit-profile.php?user_username=$username&request=login&status=success");    
        }
        else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../components/authentication-check.php");
                exit();
            }
        }
    
?>