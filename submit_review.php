<?php
include 'db.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $title = htmlspecialchars($_POST['title']);
    $rating = intval($_POST['rating']);
    $comment = htmlspecialchars($_POST['comment']);
    $date = date('Y-m-d');

    // Insert review into the database
    $stmt = $conn->prepare("INSERT INTO reviews (name, email, title, rating, comment, date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $name, $email, $title, $rating, $comment, $date);

    if ($stmt->execute()) {
        echo "Success"; // AJAX will detect this
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
<script>
    $(document).ready(function () {
    $("#reviewForm").submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        $.ajax({
            url: "submit_review.php", // PHP file to handle submission
            type: "POST",
            data: $(this).serialize(), // Serialize form data
            success: function (response) {
                if (response.trim() === "Success") {
                    alert("Review submitted successfully!");
                    $("#reviewForm")[0].reset();
                } else {
                    alert("Error: " + response);
                }
            },
            error: function () {
                alert("Error submitting the review. Please try again.");
            }
        });
    });
});

</script>

