<?php
$servername = "localhost";  // Change this if using a remote server
$username = "root";         // Your database username
$password = "";             // Your database password (keep empty if no password)
$database = "handcricket";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
