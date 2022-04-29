<?php
    $dbHost = 'localhost';  //database host name
    $dbUser = 'TestTask';       //database username
    $dbPass = 'Anton1o4';           //database password
    $dbName = 'TestTask'; //database name
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>