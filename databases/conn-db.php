<?php
$servername = "localhost";
$username = "root";
$password = "paki123";
$dbname = "hr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully with 'hr' database<br>";
?>