<?php
$host = 'localhost'; // Your database host
$user = 'root'; // Your database username
$password = 'root'; // Your database password
$database = 'utspemweb'; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
