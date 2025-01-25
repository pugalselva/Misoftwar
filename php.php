
<?php
include 'db.php';  // Assuming db.php is in the same directory as react.php


// Fetch course details from the database
$sql = "SELECT * FROM courses_details WHERE id = 1"; // Change the condition as needed
$result = $conn->query($sql);

$course = $result->fetch_assoc();

$conn->close();
?>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $title = htmlspecialchars($_POST['title']);
    $rating = intval($_POST['rating']);
    $comment = htmlspecialchars($_POST['comment']);
    $date = date('Y-m-d');

    // Prepare the review data
    $review = [
        'name' => $name,
        'email' => $email,
        'title' => $title,
        'rating' => $rating,
        'comment' => $comment,
        'date' => $date
    ];

    // Save the review to a file
    $reviewsFile = 'reviews.json';

    if (file_exists($reviewsFile)) {
        $reviews = json_decode(file_get_contents($reviewsFile), true);
    } else {
        $reviews = [];
    }

    $reviews[] = $review;
    file_put_contents($reviewsFile, json_encode($reviews));

    // Redirect back to the reviews page
    header('Location: php.php');
    exit;
}
?>
<?php
// Load reviews from file
$reviewsFile = 'reviews.json';
$reviews = [];

if (file_exists($reviewsFile)) {
    $reviews = json_decode(file_get_contents($reviewsFile), true);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
<link rel="stylesheet" href="css/styles.css">

<!--====== Responsive css ======-->
<link rel="stylesheet" href="css/responsive.css">

<!-- stylesheet -->
<style>
     .author-thumb {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
    }
 </style>
</head>

<body>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div>
                <img src="images/mi logo1.png" alt="Logo" class="logo-reload" />
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
                            <a href="index.php" class="logo-container">
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
                                        <a class="active" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.php">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="events.php">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project.php">Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="login.php"><i class="fa fa-user-circle-o"></i><span></span></a></li>
                                
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
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
                <input type="text" placeholder="Search by keyword" />
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Learn basic PHP</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Learn basic PHP
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- page banner cont -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES SINGEl PART START ======-->

    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                    <div class="title">
                        <h3>PHP Training Course</h3>
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img src="images/course/teacher/t-1.jpg" alt="Teacher" />
                                        </div>
                                        <div class="name">
                                            <span>Trainer</span>
                                            <h6>Ram Kumar</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6>Web Development</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Review</span>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="rating">(20 Reviews)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p>
                            PHP Online Training will make you an expert in PHP programming
                            to become a Professional Backend Developer with
                            real-world projects. Learn PHP from scratch to build dynamic
                            and database-driven websites with Hands-on Demo Sessions.
                            This course will help you master server-side scripting, working with
                            databases like MySQL, and implementing secure and efficient code.
                            Gain practical knowledge in creating functional and scalable web applications,
                            along with debugging and optimizing PHP code. You will become proficient
                            in backend web development with our PHP Online Training Course led by
                            certified trainers and an updated syllabus.
                        </p>
                    </div>

                        <!-- title -->
                        <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="images/course/php.png" alt="Courses" />
                        </div>
                        <!-- corses singel image -->
                        <div class="corses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab"
                                        aria-controls="curriculam" aria-selected="false">Course Syllabus</a>
                                </li>
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab"
                                        aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                        aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description container">
                                        <div class="singel-description pt-4">
                                            <h6 class="text-primary">PHP Training Course Overview</h6>
                                            <p class="text-justify">
                                                This Comprehensive Online PHP Training Course will equip you with the skills to build dynamic and interactive web applications. 
                                                You will gain hands-on experience in PHP programming, understanding server-side scripting, and integrating databases using MySQL. 
                                                The course covers best practices for developing robust and secure web applications.
                                            </p>
                                            <p class="text-justify">
                                                Learn how to design and develop scalable web applications using PHP, implement MVC architecture, and work with frameworks like Laravel. 
                                                This training is ideal for beginners and professionals looking to enhance their skills in backend development. 
                                                Taught by experienced instructors, the course includes real-world projects and placement assistance.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6>PHP Course Content</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="module">
                                                <h2>Module 1: Introduction to PHP</h2>
                                                <ul>
                                                    <li>Overview of PHP</li>
                                                    <li>Setting Up the PHP Development Environment</li>
                                                    <li>Basic Syntax and PHP Tags</li>
                                                    <li>Understanding PHP Variables and Data Types</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 2: PHP Control Structures and Functions</h2>
                                                <ul>
                                                    <li>Conditional Statements and Loops</li>
                                                    <li>Working with PHP Functions</li>
                                                    <li>Arrays and String Manipulation</li>
                                                    <li>Error and Exception Handling</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 3: Working with Forms and Sessions</h2>
                                                <ul>
                                                    <li>Handling HTML Forms with PHP</li>
                                                    <li>Form Validation and Sanitization</li>
                                                    <li>Session and Cookie Management</li>
                                                    <li>File Handling in PHP</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 4: Database Integration with MySQL</h2>
                                                <ul>
                                                    <li>Introduction to MySQL</li>
                                                    <li>Connecting PHP with MySQL</li>
                                                    <li>Performing CRUD Operations</li>
                                                    <li>Using Prepared Statements</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 5: Advanced PHP Concepts</h2>
                                                <ul>
                                                    <li>Object-Oriented Programming in PHP</li>
                                                    <li>Working with PHP Frameworks (Laravel Basics)</li>
                                                    <li>Implementing MVC Architecture</li>
                                                    <li>Web Security and Best Practices</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 6: Building and Deploying PHP Applications</h2>
                                                <ul>
                                                    <li>Developing a Complete PHP Project</li>
                                                    <li>Testing and Debugging PHP Applications</li>
                                                    <li>Performance Optimization</li>
                                                    <li>Deploying PHP Applications to a Web Server</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- curriculam cont -->
                                </div>
                                <!-- Review paga -->       
                                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="reviews-cont">
                                            <div class="title">
                                                <h6>Student Reviews</h6>
                                            </div>
                                            <ul>
                                                <?php foreach ($reviews as $review): ?>
                                                    <li>
                                                        <div class="singel-reviews">
                                                            <div class="reviews-author">
                                                                <div class="author-thumb">
                                                                    <img src="images/MI logo.png" alt="Reviews" />
                                                                </div>
                                                                <div class="author-name">
                                                                    <h6><?= htmlspecialchars($review['name']); ?></h6>
                                                                    <span><?= htmlspecialchars($review['date']); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="reviews-description pt-20">
                                                                <h4><?= htmlspecialchars($review['title']) ?></h4>
                                                                <p><?= htmlspecialchars($review['email']) ?></p>
                                                                <p><?= htmlspecialchars($review['comment']); ?></p>
                                                                <div class="rating">
                                                                    <ul>
                                                                        <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        <?php endfor; ?>
                                                                    </ul>
                                                                    <span>/ <?= $review['rating']; ?> Star<?= $review['rating'] > 1 ? 's' : ''; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                    </div><!-- reviews cont -->
                                </div>
                            </div><!-- tab content -->
                        </div>
                    </div> <!-- corses singel left -->
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                                <h4>Course Features</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>Duration:
                                        <span><?php echo htmlspecialchars($course['duration']); ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clone"></i>Training mode: 
                                        <span><?php echo htmlspecialchars($course['training_mode']); ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-beer"></i> Class Time: 
                                        <span><?php echo htmlspecialchars($course['class_time']); ?></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-user-o"></i>Students: 
                                        <span><?php echo htmlspecialchars($course['students']); ?></span>
                                    </li>
                                </ul>
                                <div class="price-button pt-10">
                                    <a href="#" class="main-btn">Enroll Now</a>
                                </div>
                            </div>
                            <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You make like</h4>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image" />
                                    </div>
                                    <div class="cont">
                                        <a href="#">
                                            <h4>Introduction to php</h4>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-user"></i>31</a>
                                            </li>
                                            <!-- <li>$50</li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image" />
                                    </div>
                                    <div class="cont">
                                        <a href="#">
                                            <h4>Getting Started with php: A Beginner's Guide</h4>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-user"></i>31</a>
                                            </li>
                                            <!-- <li>$50</li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image" />
                                    </div>
                                    <div class="cont">
                                        <a href="#">
                                            <h4>Basic Learn php</h4>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-user"></i>31</a>
                                            </li>
                                            <!-- <li>$50</li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== COURSES SINGEl PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index.php" class="logo-container d-flex align-items-center">
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
                                    <p class="Con ml-3">+91 93440 23645</p>
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
    <script src="js/main.js"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>
</body>

</html>
