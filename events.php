<?php
include 'db.php';  // Assuming db.php is in the same directory as react.php
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
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.php" class="logo-container">
                                    <img class="logo-image" src="images/mi logo1.png" alt="Logo">
                                    <h2 class="logo-text">Misoftwar</h2>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-1.jpeg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 15 March 2023</span>
                            <a href="events-singel.php"><h4>Women in Tech Conference</h4></a>
                            <span><i class="fa fa-clock-o"></i> 10:00 AM - 4:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> Idhaya Auditorium</span>
                            <p>Join us for a day of inspiring talks and workshops led by successful women in the tech industry. Network with peers and learn about the latest trends in technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-2.jpeg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 22 March 2023</span>
                            <a href="events-singel.php"><h4>Hackathon 2023</h4></a>
                            <span><i class="fa fa-clock-o"></i> 9:00 AM - 6:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> Computer Lab</span>
                            <p>Put your coding skills to the test in our annual hackathon! Collaborate with fellow students to create innovative solutions and win exciting prizes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-3.jpeg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 5 April 2023</span>
                            <a href="events-singel.php"><h4>AI and Machine Learning Workshop</h4></a>
                            <span><i class="fa fa-clock-o"></i> 10:00 AM - 3:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> Seminar Hall</span>
                            <p>Explore the fundamentals of AI and machine learning in this hands-on workshop. Learn from industry experts and gain practical experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-4.jpg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 12 April 2023</span>
                            <a href="events-singel.php"><h4>Career Fair 2023</h4></a>
                            <span><i class="fa fa-clock-o"></i> 10:00 AM - 5:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> College Grounds</span>
                            <p>Meet potential employers and explore job opportunities at our annual career fair. Bring your resume and get ready to network!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-5.jpg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 20 April 2023</span>
                            <a href="events-singel.php"><h4>Cybersecurity Awareness Seminar</h4></a>
                            <span><i class="fa fa-clock-o"></i> 1:00 PM - 4:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> Lecture Hall</span>
                            <p>Learn about the importance of cybersecurity in today's digital world. This seminar will cover best practices and strategies to protect yourself online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="singel-event-list mt-30">
                        <div class="event-thum">
                            <img src="images/event/Event-6.jpeg" alt="Event">
                        </div>
                        <div class="event-cont">
                            <span><i class="fa fa-calendar"></i> 28 April 2023</span>
                            <a href="events-singel.php"><h4>Robotics Workshop</h4></a>
                            <span><i class="fa fa-clock-o"></i> 10:00 AM - 3:00 PM</span>
                            <span><i class="fa fa-map-marker"></i> Robotics Lab</span>
                            <p>Join us for an exciting workshop on robotics! Learn about the basics of robotics and get hands-on experience building your own robot.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
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
                            <p>Welcome to Misoftwar Software Training. Our platform provides comprehensive tutorials, guides, and resources to help you master the tools and features of our software.</p>
                            <ul class="mt-20 d-flex">
                                <li><a href="https://www.facebook.com/profile.php?id=61571215133777"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="http://www.linkedin.com/in/misoftwar-aa7b87342"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCDp-Yi1G5pNbYOGozc4rt_w"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/misoftwar_official/"><i class="fa fa-instagram"></i></a></li>
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
