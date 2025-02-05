<?php
// Database connection configuration
$host = 'localhost';
$user = 'root';
$password = 'MYSQL70@pug';    
$database = 'enquiries_mi'; 

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



