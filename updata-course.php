<?php
include 'db.php';  

// Check if 'id' is passed in the URL and is not empty
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No course ID provided.");
}

// Sanitize the course ID
$course_id = (int) $_GET['id']; // Ensure it's an integer
// Fetch course details from the database
$query = "SELECT * FROM up_courses WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $course_id);
$stmt->execute();
$result = $stmt->get_result();
$course = $result->fetch_assoc();

if (!$course) {
    die("Error: Course not found.");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $price_label = $_POST['price_label'];

    // Handle Image Upload
    if (!empty($_FILES['image']['name'])) {
        $image = "images/course/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        $image = $course['image'];  // Keep the old image if no new image is uploaded
    }

    // Update Course in the database
    $update_query = "UPDATE up_courses SET title=?, link=?, price_label=?, image=? WHERE id=?";
    $stmt = $mysqli->prepare($update_query);
    $stmt->bind_param("ssssi", $title, $link, $price_label, $image, $course_id);

    if ($stmt->execute()) {
        echo "Course updated successfully!";
        header("Location: course.php?message=Course updated successfully");
        exit;
    } else {
        echo "Error updating course.";
    }
}
?>
<?php print_r($_GET); // This will show all query parameters
exit;
?>

<!-- Update Course Form -->
<!-- Update Course Form -->
<form method="POST" enctype="multipart/form-data">
    <label>Course Title:</label>
    <input type="text" name="title" value="<?= htmlspecialchars($course['title']); ?>" required><br>

    <label>Course Link:</label>
    <input type="text" name="link" value="<?= htmlspecialchars($course['link']); ?>" required><br>

    <label>Price Label:</label>
    <input type="text" name="price_label" value="<?= htmlspecialchars($course['price_label']); ?>" required><br>

    <label>Course Image:</label>
    <input type="file" name="image"><br>
    <img src="<?= $course['image']; ?>" width="100"><br>

    <button type="submit">Update Course</button>
</form>
