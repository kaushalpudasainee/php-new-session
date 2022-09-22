<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email=$_POST['email'];
        $password=$_POST['pass'];
        if($email==="aayush@gmail.com" && $password="12345"){
            $_SESSION['isloggedIn']=true;
            header("location:welcome.php");
        }else{
            header("location:index.php");
        }
    }
    ?>