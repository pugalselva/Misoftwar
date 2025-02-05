<?php
include 'db.php';

// Set number of records per page
$records_per_page = 10;

// Get the current page from the URL, default to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;

// Calculate the starting point for records
$offset = ($page - 1) * $records_per_page;

// Fetch total number of enquiries
$enquiries_result = $conn->query('SELECT COUNT(*) AS total FROM enquiries_table');
$enquiries_count = $enquiries_result->fetch_assoc()['total'];

// Calculate total pages
$total_pages = ceil($enquiries_count / $records_per_page);

// Fetch enquiries with pagination
$enquiries = $conn->query("SELECT * FROM enquiries_table ORDER BY created_at DESC LIMIT $records_per_page OFFSET $offset");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Misoftwar</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/mi logo1.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-selects.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/stylesheet.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Boostrap cdn -->
    <style>
        body {
            background: linear-gradient(135deg, #000000, #2a5298);
            min-height: 100vh;
            color: white;
        }
    </style>
</head>

<body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div>
                <img src="images/mi logo1.png" alt="Logo" class="logo-reload">
            </div>
        </div>
    </div>


    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="logo-container">
                                <img class="logo-image" src="images/mi logo1.png" alt="Logo">
                                <h2 class="logo-text">Misoftwar</h2>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="active" href="admin_dashboard.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="update-course.php">Update-Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="update_event.php">Update-Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project.php">Project</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="index.php"><i class="fa fa-sign-out"></i><span></span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->
    <div class="container-admin mt-5">
        <h2 class="mb-4 text-center" style="color: white;">Admin Dashboard</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fa fa-envelope"></i> Total Enquiries</h5>
                        <h2><?= $enquiries_count ?></h2>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title"><i class="fa fa-users"></i> Student Logins Today</h5>
                    <h2><?= $student_logins ?></h2>
                </div>
            </div>
        </div> -->
            <div class="col-md-6">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title"><i class="fa fa-calendar"></i> Calendar</h5>
                        <div class="calendar">
                            <span class="blur"><?= date('l, F j, Y') ?></span>
                            <a href="update_event.php" class="btn btn-warning">Add Event</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <h4 class="mt-4" style="color: white;">Recent Enquiries</h4>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
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
                        <td><?= htmlspecialchars($enquiry['name']) ?></td>
                        <td><?= htmlspecialchars($enquiry['email']) ?></td>
                        <td><?= htmlspecialchars($enquiry['phone']) ?></td>
                        <td><?= htmlspecialchars($enquiry['course']) ?></td>
                        <td><?= htmlspecialchars($enquiry['message']) ?></td>
                        <td><?= htmlspecialchars($enquiry['created_at']) ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>

                <?php if ($page < $total_pages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>


    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index-2.php" class="logo-container d-flex align-items-center">
                                    <img class="logo-image" src="images/MI logo.png" alt="Logo">
                                    <h2 class="logo-texts ml-3">Misoftwar</h2>
                                </a>
                            </div>
                            <p>Welcome to Misoftwar Software Training. Our platform provides comprehensive tutorials,
                                guides, and resources to help you master the tools and features of our software.</p>
                            <ul class="mt-20 d-flex">
                                <li><a href="https://www.facebook.com/profile.php?id=61571215133777"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li><a href="http://www.linkedin.com/in/misoftwar-aa7b87342"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCDp-Yi1G5pNbYOGozc4rt_w"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/misoftwar_official/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>HOME</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Course</a></li>
                                <li><a href="events.php"><i class="fa fa-angle-right"></i>Events</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                                <li><a href="review.php"><i class="fa fa-angle-right"></i>Review</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-map-marker"></i>
                                    <p class="Con ml-3">Misoftwar
                                        No.78, Kudi Street,
                                        Umayalpuram,
                                        P.N. Palayam(T.K),
                                        Salem(D.T)-636119</p>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-phone"></i>
                                    <p class="Con ml-3">+91 04447781715</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa fa-envelope-o"></i>
                                    <p class="Con ml-3">muthusoftware22@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright Section -->
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-md-left text-center">
                        <p>© Copyright PearlSys. All Rights Reserved</p>
                    </div>
                    <div class="col-md-4 text-md-right text-center">
                        <p>Designed by PearlSys</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TP PART ENDS ======-->








    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>

    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>

    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>

    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="js/mainpage.js"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
