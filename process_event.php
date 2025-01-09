<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_date = $_POST['event_date'];
    $event_title = $_POST['event_title'];
    $event_time = $_POST['event_time'];
    $event_location = $_POST['event_location'];

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

    echo "Event successfully updated! <a href='index-4.php'>View Events</a>";
}
?>
<!-- new code admin -->

<?php
// include('db_connection.php');

// $event_date = $_POST['event_date'];
// $event_title = $_POST['event_title'];
// $event_time = $_POST['event_time'];
// $event_location = $_POST['event_location'];

// $sql = "UPDATE events SET event_date = ?, event_title = ?, event_time = ?, event_location = ? WHERE event_id = ?";

// $stmt = $conn->prepare($sql);
// $stmt->bind_param("ssssi", $event_date, $event_title, $event_time, $event_location, $event_id); // Adjust with actual event ID
// $stmt->execute();

// if ($stmt->affected_rows > 0) {
//     echo "Event updated successfully!";
// } else {
//     echo "Error updating event.";
// }

// $stmt->close();
// $conn->close();
?>
