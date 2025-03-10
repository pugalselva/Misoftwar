<?php
include 'db.php'; // Assuming db.php is in the same directory as react.php
?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Misoftware Solutions LLP</title>

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
    <link rel="stylesheet" href="css/stylepages.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- CSS Styling -->
    <style>
        .about-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .about-items .row {
            display: flex;
            flex-wrap: wrap;
        }

        .about-single-item {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .about-single-item {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .about-single-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .item-number {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            display: block;
            margin-bottom: 10px;
        }

        h4 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .mission-list {
            text-align: left;
            padding-left: 0;
            list-style: none;
        }

        .mission-list li {
            margin-bottom: 10px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .mission-list li strong {
            margin-left: 5px;
            color: #333;
        }

        @media (max-width: 768px) {
            .about-single-item {
                margin-bottom: 20px;
            }
        }
    </style>


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div>
                <img src="images/misolution.png" alt="Logo" class="logo-reload">
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
                                <img class="logo-image" src="images/misolution.png" alt="Logo">
                                <!-- <h2 class="logo-text">Misoftware</h2> -->
                                <h2 class="logo-text ml-3 d-flex flex-column">Misoftware<span>Solutions LLP</span></h2>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a  href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="active" href="about.php">About us</a>
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
                                <!-- <li><a href="#" id="search"><i class="fa fa-search"></i></a></li> -->
                                <li><a href="adminlogin.php"><i class="fa fa-user-circle-o"></i><span></span></a></li>

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
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About Us</h5>
                        <h3>Mi-Software Solutions LLP</h3>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Mi-Software Solutions LLP is a leading software development company dedicated to delivering
                            innovative
                            solutions that empower businesses to thrive in the digital age. Our team of experienced
                            professionals is committed to providing high-quality software products tailored to meet the
                            unique needs of our clients. <br><br> With a focus on cutting-edge technology and customer
                            satisfaction, we strive to create software that not only meets but exceeds expectations.
                            Join us on our journey to transform the way businesses operate through technology.</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="images/event/Event-1.jpeg" alt="About Mi-Software Solutions LLP">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-single-item">
                            <span class="item-number">01</span>
                            <h4>Our Mission – Innovation with Impact</h4>
                            <p>At Mi-Software Solutions LLP, we don’t just develop software—we build possibilities. We
                                are driven by:</p>
                            <ul class="mission-list">
                                <li>🌍 <strong>Equality in Access</strong> – Technology should serve all, not just the
                                    privileged.</li>
                                <li>📌 <strong>Customer-Centric Innovation</strong> – Your needs define our solutions.
                                </li>
                                <li>🚀 <strong>Bridging the Digital Divide</strong> – Making complex technology simple,
                                    seamless, and smart.</li>
                                <li>💡 <strong>A Future Without Limits</strong> – Where every business, every
                                    entrepreneur, and every dreamer can thrive.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-single-item">
                            <span class="item-number">02</span>
                            <h4>What We Do – Turning Vision into Reality</h4>
                            <p>We craft intelligent, intuitive, and impact-driven solutions tailored for every industry:
                            </p>
                            <ul class="mission-list">
                                <li>✔ <strong>E-Commerce Platforms</strong> – Bringing businesses online with ease.</li>
                                <li>✔ <strong>POS Systems</strong> – Revolutionizing transactions with speed and
                                    simplicity.</li>
                                <li>✔ <strong>Industrial Software</strong> – Powering precision, efficiency, and
                                    automation.</li>
                                <li>✔ <strong>HR & Payroll Solutions</strong> – Streamlining workforce management with
                                    innovation.</li>
                                <li>✔ <strong>Supermarket Software</strong> – Enhancing retail experiences through
                                    technology.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Our Vision -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-single-item">
                            <span class="item-number">03</span>
                            <h4>Our Vision – Technology Without Limits</h4>
                            <p>We believe that technology should be a force of empowerment, not a barrier. That’s why we
                                are building software that is:</p>
                            <ul class="mission-list">
                                <li>✨ <strong>Effortless & Inclusive</strong> – No technical expertise required—anyone
                                    can use it.</li>
                                <li>✨ <strong>Adaptable & Scalable</strong> – From small businesses to global
                                    enterprises, our solutions grow with you.</li>
                                <li>✨ <strong>Affordable & Powerful</strong> – High performance without high
                                    costs—excellence within reach.</li>
                                <li>✨ <strong>Designed for Everyone</strong> – Whether you run a tea shop or a
                                    multinational corporation, technology should work for you.</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->



    <!--====== COUNTER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-65 pb-120">
        <!-- <div class="container"> -->
        <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8"
            style="background-image: url(images/bg-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="singel-counter text-center mt-40">
                            <span><span class="counter">1500</span>+</span>
                            <p>Trained Students</p>
                        </div> <!-- singel counter -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="singel-counter text-center mt-40">
                            <span><span class="counter">10</span>+</span>
                            <p>Courses Uploaded</p>
                        </div> <!-- singel counter -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="singel-counter text-center mt-40">
                            <span><span class="counter">1500</span>+</span>
                            <p>People certifie</p>
                        </div> <!-- singel counter -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!-- row -->
        <!-- </div> container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->
    <section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8"
        style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonials</h5>
                        <h2>What Our Clients Say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-4 col-md-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/icong1.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>"Misoftware Solutions LLP transformed our business with their innovative software
                                solutions. Their team was professional and attentive to our needs."</p>
                            <h6>Rubina Helen</h6>
                            <span>Project Manager, Tech Solutions</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/iconb1.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>"The team at Misoftware Solutions LLP delivered our project on time and exceeded our
                                expectations. Their expertise in software development is unmatched."</p>
                            <h6>Mark Anderson</h6>
                            <span>CEO, Innovative Tech</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="images/testimonial/icong3.png" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>"Working with Misoftware Solutions LLP was a game-changer for our startup. Their
                                solutions helped us scale quickly and efficiently."</p>
                            <h6>Fatima Ali</h6>
                            <span>Co-Founder, StartUp Hub</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-11.jpg" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-12.jpg" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-10.jpg" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-9.jpg" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-8.jpg" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/proj-7.jpg" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

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
                                    <img class="logo-images" src="images/misolution.png" alt="Logo">
                                    <h2 class="logo-texts ml-3 d-flex flex-column">Misoftware<span>Solutions LLP</span>
                                    </h2>

                                </a>
                            </div>
                            <p>Welcome to Misoftware Solutions LLP Software Training. Our platform provides
                                comprehensive tutorials,
                                guides, and resources to help you master the tools and features of our software.</p>
                            <ul class="mt-20 d-flex">
                                <li><a href="https://www.facebook.com/profile.php?id=61571215133777"
                                        target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/misoftwar/" target="_blank"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/@Misoftwar" target="_blank"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/misoftwar_official/" target="_blank"><i
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
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-map-marker"></i>
                                    <p class="Con ml-3">
                                        3rd Floor, North Face, No.5, Perumal Kovil Street, Urapakkam,
                                        Chengalpattu-District, Tamil Nadu-603210.
                                    </p>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fa fa-phone"></i>
                                    <p class="Con ml-3">+91 04447781715</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa fa-envelope-o"></i>
                                    <p class="Con ml-3">admin@misoftwaresolutionsllp.com</p>
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
                    <div class="col-md-8 text-md-left text-center footer-text ">
                        <p>© Copyright PearlSys. All Rights Reserved</p>
                    </div>
                    <div class="col-md-4 text-md-right text-center footer-text">
                        <p>Designed by PearlSys</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->


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
