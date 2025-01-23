<?php
include 'db.php';

$sql = 'SELECT * FROM courses_details WHERE id = 1'; // Change the condition as needed
$result = $conn->query($sql);

$course = $result->fetch_assoc();

$conn->close();
?>
<!--  -->
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
    <link rel="stylesheet" href="css/styles.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

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
                        <h2>Learn basic .Net Framework</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Learn basic .Net Framework
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
                            <h3>.NET Framework Training Course</h3>
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
                                            <h6>Software Development</h6>
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
                                .NET Framework Online Training will make you an expert in software development
                                to become a Professional .NET Developer with real-world projects. Learn .NET Framework
                                from scratch to design, develop, and deploy web and desktop applications effectively
                                with hands-on demo sessions.
                                This course will help you master .NET concepts such as working with C#, ASP.NET, MVC,
                                and Web API. Gain practical knowledge in application development, data access, and
                                security.
                                You will become proficient in using .NET Framework for building scalable applications
                                with our .NET Framework Online Training Course led by certified trainers and an updated
                                syllabus.
                            </p>
                        </div>


                        <!-- title -->
                        <!-- course terms -->

                        <div class="corses-singel-image pt-50">
                            <img src="images/course/net.png" alt="Courses" />
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
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="overview-description container">
                                        <div class="singel-description pt-4">
                                            <h6 class="text-primary">.NET Framework Training Course Overview</h6>
                                            <p class="text-justify">
                                                This Comprehensive Online .NET Framework Training Course will equip you
                                                with the skills to design, develop, and maintain applications using .NET
                                                technologies.
                                                You will gain hands-on experience in C#, ASP.NET, MVC, Web APIs, and
                                                more. The course will help you master key concepts in .NET development,
                                                object-oriented programming,
                                                and web application development.
                                            </p>
                                            <p class="text-justify">
                                                Learn how to build scalable web applications, work with databases using
                                                Entity Framework, and integrate your applications with cloud services.
                                                This training is ideal for beginners and professionals looking to
                                                enhance their .NET skills. The course includes real-world projects,
                                                coding challenges,
                                                and placement assistance to help you advance your career as a .NET
                                                Developer.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                    aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6>.NET Framework Course Content</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="module">
                                                <h2>Module 1: Introduction to .NET Framework</h2>
                                                <ul>
                                                    <li>Overview of .NET Framework and Its Components</li>
                                                    <li>Setting Up the .NET Development Environment</li>
                                                    <li>Introduction to C# Programming Language</li>
                                                    <li>Understanding .NET Core vs. .NET Framework</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 2: C# Programming Basics</h2>
                                                <ul>
                                                    <li>Variables, Data Types, and Operators</li>
                                                    <li>Control Flow (if, switch, loops)</li>
                                                    <li>Methods and Functions</li>
                                                    <li>Object-Oriented Programming Concepts (OOP)</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 3: ASP.NET Web Development</h2>
                                                <ul>
                                                    <li>Introduction to ASP.NET MVC</li>
                                                    <li>Building Views and Controllers</li>
                                                    <li>Model Binding and Validation</li>
                                                    <li>Creating Web Forms</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 4: Web APIs and Web Services</h2>
                                                <ul>
                                                    <li>Creating RESTful APIs with ASP.NET</li>
                                                    <li>Handling HTTP Requests and Responses</li>
                                                    <li>Using JSON for Data Exchange</li>
                                                    <li>Securing Web APIs with Authentication and Authorization</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 5: Data Access with Entity Framework</h2>
                                                <ul>
                                                    <li>Introduction to ORM and Entity Framework</li>
                                                    <li>Creating and Modifying Databases</li>
                                                    <li>LINQ Queries and Data Manipulation</li>
                                                    <li>Implementing Data Validation and Error Handling</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 6: Advanced Topics and Best Practices</h2>
                                                <ul>
                                                    <li>Asynchronous Programming with async/await</li>
                                                    <li>Unit Testing and Test-Driven Development (TDD)</li>
                                                    <li>Design Patterns for .NET Applications</li>
                                                    <li>Building Scalable and Performant Applications</li>
                                                </ul>
                                            </div>

                                            <div class="module">
                                                <h2>Module 7: Deployment and Cloud Integration</h2>
                                                <ul>
                                                    <li>Deploying .NET Applications on IIS</li>
                                                    <li>Integrating with Azure Cloud Services</li>
                                                    <li>Version Control with Git</li>
                                                    <li>Case Study: Building a Complete .NET Web Application</li>
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
                                <div class="tab-pane fade show active" id="reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
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
                                            <h4>Introduction to .Net Framework</h4>
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
                                            <h4>Getting Started with .Net Framework: A Beginner's Guide</h4>
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
                                            <h4>Basic Learn .Net Framework</h4>
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
                                    <p class="Con ml-3">muthu22@gmail.com</p>
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

    <script>
        document.querySelectorAll('.rate-item').forEach(item => {
            item.addEventListener('click', function() {

                const ratingValue = this.getAttribute('data-value');

                document.getElementById('rating-value').value = ratingValue;

                document.querySelectorAll('.rate-item').forEach(star => {
                    star.querySelector('i').classList.remove('selected');
                });
                for (let i = 0; i < ratingValue; i++) {
                    document.querySelectorAll('.rate-item')[i].querySelector('i').classList.add('selected');
                }
            });
        });
    </script>
</body>

</html>
