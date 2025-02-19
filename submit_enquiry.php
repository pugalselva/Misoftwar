<?php
session_start();
include 'db.php';

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $course = trim($_POST['course']);
    $message = trim($_POST['message']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($course) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    // Prepare and execute SQL query
    $stmt = $conn->prepare("INSERT INTO enquiries_table (name, email, phone, course, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $course, $message);

    if ($stmt->execute()) {
        echo "Thank you! Your enquiry has been submitted.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
