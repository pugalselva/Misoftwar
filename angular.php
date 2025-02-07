<?php
include 'db.php';  

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
        'date' => $date,
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
    header('Location: net.php');
    exit();
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
<link rel="stylesheet" href="css/stylesheet.css">

<!-- newstyle -->
<link rel="stylesheet" href="css/newstyle.css">

<!--====== Responsive css ======-->
<link rel="stylesheet" href="css/responsive.css">

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
                        <h2>Learn basic AngularJS</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Learn basic AngularJS
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
                        <h3>Angular.js Training Course</h3>
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
                                        <h6>Programming</h6>
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
                            Angular.js Online Training will make you an expert in Angular.js
                            Programming to become a Professional Frontend Developer with
                            real-world projects. Learn Angular.js from scratch to build dynamic
                            and responsive web applications with Hands-on Demo Sessions.
                            This course will help you master Angular.js concepts like
                            components, directives, and data binding, along with practical
                            implementation of Angular Router and NgRx. Gain in-depth knowledge
                            in creating interactive UIs and deploying web applications using
                            Angular.js with certified trainers and an updated syllabus. You will
                            become proficient in building modern web applications with our
                            Angular.js Online Training Course.
                        </p>
                    </div>


                        <!-- title -->
                        <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="images/course/angular.jpg" alt="Courses" />
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
                                            <h6 class="text-primary">Angular.js Training Course Overview</h6>
                                            <p class="text-justify">
                                                This Comprehensive Online Angular.js Training will make you a Professional Frontend Developer, enabling
                                                you to build dynamic and responsive web applications. You will gain hands-on experience in creating
                                                Angular components, managing state, and leveraging the Angular ecosystem to deliver robust applications.
                                                The course also covers integration with APIs and tools to streamline development workflows.
                                            </p>
                                            <p class="text-justify">
                                                Learn how to develop interactive UIs, use Angular Router for navigation, and manage application state
                                                efficiently with tools like NgRx. This training is designed for beginners and professionals who want to
                                                enhance their skills in frontend development. Taught by industry experts, this course includes real-time
                                                assignments and placement assistance.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6>Angular.js Course Content</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="module">
                                                <h2>Module 1: Introduction to Angular.js</h2>
                                                <ul>
                                                    <li>What is Angular.js and Why Angular.js?</li>
                                                    <li>Setting Up the Development Environment</li>
                                                    <li>Understanding Angular Templates</li>
                                                    <li>Components and Data Binding</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 2: Directives and Pipes</h2>
                                                <ul>
                                                    <li>Built-in Directives</li>
                                                    <li>Custom Directives</li>
                                                    <li>Using Pipes for Data Transformation</li>
                                                    <li>Creating Custom Pipes</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 3: Angular Router and Navigation</h2>
                                                <ul>
                                                    <li>Setting Up Angular Router</li>
                                                    <li>Dynamic Routing</li>
                                                    <li>Navigation and Links</li>
                                                    <li>Route Guards</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 4: State Management with NgRx</h2>
                                                <ul>
                                                    <li>Introduction to NgRx</li>
                                                    <li>Actions, Reducers, and Store</li>
                                                    <li>Connecting NgRx to Angular</li>
                                                    <li>Using Effects for Asynchronous Tasks</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 5: Advanced Angular Concepts</h2>
                                                <ul>
                                                    <li>Dependency Injection</li>
                                                    <li>RxJS Observables</li>
                                                    <li>Lazy Loading Modules</li>
                                                    <li>Error Handling in Angular</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 6: Building and Deploying Angular Applications</h2>
                                                <ul>
                                                    <li>Working with APIs (REST and GraphQL)</li>
                                                    <li>Unit Testing Angular Components</li>
                                                    <li>Optimizing Angular Applications</li>
                                                    <li>Deploying Angular Apps to Cloud</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- curriculam cont -->
                                </div>


                                <!-- <div class="tab-pane fade" id="instructor" role="tabpanel"
                                    aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                                <img src="images/instructor/i-1.jpg" alt="Instructor" />
                                            </div>
                                            <div class="author-name">
                                                <a href="#">
                                                    <h5>Sumon Hasan</h5>
                                                </a>
                                                <span>Senior WordPress Developer</span>
                                            </div>
                                        </div>
                                        <div class="instructor-description pt-25">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Delectus fuga ratione molestiae unde provident
                                                quibusdam sunt, doloremque. Error omnis mollitia, ex
                                                dolor sequi. Et, quibusdam excepturi. Animi assumenda,
                                                consequuntur dolorum odio sit inventore aliquid, optio
                                                fugiat alias. Veritatis minima, dicta quam repudiandae
                                                repellat non sit, distinctio, impedit, expedita
                                                tempora numquam?
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="tab-pane fade" id="reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                        <div class="title">
                                            <h6>Student Reviews</h6>
                                        </div>
                                        <div class="scroll-review">
                                            <ul>
                                                <?php foreach ($reviews as $review): ?>
                                                <li>
                                                    <div class="singel-reviews">
                                                        <div class="reviews-author">
                                                            <div class="author-thumb">
                                                                <img src="images/MI logo.png" alt="Reviews" />
                                                            </div>
                                                            <div class="author-name">
                                                                <h6><?= htmlspecialchars($review['name']) ?></h6>
                                                                <span><?= htmlspecialchars($review['date']) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-description pt-20">
                                                            <h4><?= htmlspecialchars($review['title']) ?></h4>
                                                            <p><?= htmlspecialchars($review['email']) ?></p>
                                                            <p><?= htmlspecialchars($review['comment']) ?></p>
                                                            <div class="rating">
                                                                <ul>
                                                                    <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <?php endfor; ?>
                                                                </ul>
                                                                <span>/ <?= $review['rating'] ?>
                                                                    Star<?= $review['rating'] > 1 ? 's' : '' ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div class="title pt-15">
                                            <h6>Leave A Comment</h6>
                                        </div>
                                        <div class="reviews-form">
                                            <form action="net.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-singel">
                                                            <input type="text" name="name"
                                                                placeholder="Fast name" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-singel">
                                                            <input type="email" name="email"
                                                                placeholder="Enter Gmail" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-singel">
                                                            <input type="text" name="title"
                                                                placeholder="Enter Title" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-singel">
                                                            <div class="rate-wrapper">
                                                                <div class="rate-label">Your Rating:</div>
                                                                <div class="rate">
                                                                    <input type="hidden" name="rating"
                                                                        id="rating-value" value="0" />
                                                                    <div class="rate-item" data-value="1">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item" data-value="2">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item" data-value="3">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item" data-value="4">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item" data-value="5">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-singel">
                                                            <textarea name="comment" placeholder="Comment" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-singel">
                                                            <button type="submit" class="main-btn">Post
                                                                Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- reviews cont -->
                                </div>
                            </div>
                            <!-- tab content -->
                        </div>
                    </div>
                    <!-- corses singel left -->
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
                                            <h4>Introduction to Angularjs</h4>
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
                                            <h4>Getting Started with Angularjs: A Beginner's Guide</h4>
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
                                            <h4>Basic Learn Angularjs</h4>
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
</body>

</html>
