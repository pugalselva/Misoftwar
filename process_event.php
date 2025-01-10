<?php
// Database credentials
$host = 'localhost';  
$username = 'root';
$password = 'MYSQL70@pug';
$db = 'enquiries_mi'; 

// Connect to the database
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_date = $_POST['event_date'];
    $event_title = $_POST['event_title'];
    $event_time = $_POST['event_time'];
    $event_location = $_POST['event_location'];
    // connect json
    $events = [
        'date' => $event_date,
        'title' => $event_title,
        'time' => $event_time,
        'location' => $event_location
    ];

    $file = 'events.json';
    $currentEvents = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    $currentEvents[] = $events;

    file_put_contents($file, json_encode($currentEvents));

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO events (event_date, event_title, event_time, event_location) VALUES ('$event_date', '$event_title', '$event_time', '$event_location')");
    // $stmt->bind_param("ssss", $event_date, $event_title, $event_time, $event_location);

    // Execute the query
    if ($stmt->execute()) {
        echo "Event successfully added! <a href='index-4.php'>View Events</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

