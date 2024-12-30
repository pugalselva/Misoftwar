<?php
// Function to send an email
function sendEmail($name, $email, $subject, $message, $recipient) {
    // Construct the email body
    
    $emailBody = "
    <html>
    <head>
        <title>$subject</title>
        
    </head>
    <body>
        <h2>New message from $name</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // Set headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    return mail($recipient, $subject, $emailBody, $headers);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars(strip_tags($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST["subject"]));
    $message = htmlspecialchars(strip_tags($_POST["message"]));
    $recipient = "muthusoftware22@gmail.com";

    // Call the email function
    if (sendEmail($name, $email, $subject, $message, $recipient)) {
        // Redirect on success
        header("Location: contact.php?success=1");
        Log::alert("Form Submitted Successfully");
    } else {
        // Redirect on error
        header("Location: contact.php?error=1");
    }
    exit;
}
?>
<?php
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>Your message has been sent successfully!</p>";
} elseif (isset($_GET['error'])) {
    echo "<p style='color: red;'>Failed to send your message. Please try again.</p>";
}
?>

