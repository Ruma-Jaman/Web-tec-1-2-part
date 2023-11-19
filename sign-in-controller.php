<?php

session_start();
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(strlen(trim($email)) == 0 || strlen(trim($password)) == 0){

            header('location:sign-in.php?err=empty');
            return;

        }

        $status = login($email, $password);

        if($status!=false){
            if($status['Role'] == "Student" and $status['Status'] == "Active" ){

                $_SESSION['flag'] = true;
                setcookie("id", $status['UserID'], time()+99999999999, "/");
                header('location:profile.php');

            }
            else header('location:sign-in.php?err=bannedUser');

        }else header('location:sign-in.php?err=mismatch');
        
    }

?>