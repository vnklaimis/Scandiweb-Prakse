<?php
$servername = "localhost";
$username = "TestTask";
$password = "Nc~726di";

// Create connection
$con = mysqli_connect('185.223.31.164', 'TestTask', 'Nc~726di','TestTask');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

