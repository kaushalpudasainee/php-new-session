<?php

   $conn= new mysqli("localhost:3307","root","","kaushal");
    if($conn->connect_error){
        die($conn->connect_error);
    }

    
?>
