<?php
session_start();
$isloggedIn=isset($_SESSION['isloggedIn']);
if(!$isloggedIn){
    header("location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3>Welcome User! You are Logged In</h3>
</body>
</html>