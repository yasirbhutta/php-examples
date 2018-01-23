<?php
$servername = "localhost";
$username = "root"; // user name
$password = "paki123"; // password 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>