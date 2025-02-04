<?php
include 'db.php';

// Set number of records per page
$records_per_page = 10;

// Get the current page from the URL, default to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting point for records
$offset = ($page - 1) * $records_per_page;

// Fetch total number of enquiries
$enquiries_result = $conn->query("SELECT COUNT(*) AS total FROM enquiries_table");
$enquiries_count = $enquiries_result->fetch_assoc()['total'];

// Calculate total pages
$total_pages = ceil($enquiries_count / $records_per_page);

// Fetch enquiries with pagination
$enquiries = $conn->query("SELECT * FROM enquiries_table ORDER BY created_at DESC LIMIT $records_per_page OFFSET $offset");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Admin Dashboard</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Enquiries</h5>
                        <h2><?= $enquiries_count; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mt-4">Recent Enquiries</h4>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($enquiry = $enquiries->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($enquiry['name']); ?></td>
                        <td><?= htmlspecialchars($enquiry['email']); ?></td>
                        <td><?= htmlspecialchars($enquiry['phone']); ?></td>
                        <td><?= htmlspecialchars($enquiry['course']); ?></td>
                        <td><?= htmlspecialchars($enquiry['message']); ?></td>
                        <td><?= htmlspecialchars($enquiry['created_at']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $page - 1; ?>">Previous</a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $total_pages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $page + 1; ?>">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</body>
</html>
