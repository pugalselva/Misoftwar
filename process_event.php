<?php
   // <!-- connect with event-single.php -->

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
