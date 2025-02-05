<?php
session_start();
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($phone) || empty($course) || empty($message)) {
        echo 'All fields are required!';
        exit();
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO enquiries_table (name, email, phone, course, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $course, $message);

    if ($stmt->execute()) {
        echo "<script> window.location.href='index.php';</script>";
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: index.php');
    exit();
}
?>
