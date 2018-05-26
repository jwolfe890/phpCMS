<?php


    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = "cms";
    $connection = mysqli_connect($host, $user, $password, $db_name);
    if (!$connection) {
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    } else {
        echo 'connected';
    }

    
?>