


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
    <link rel="stylesheet" href="css/nice-select.css">
    
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
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
        /* General Reset */
body, h2, label, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Section Styling */
#page-banner {
    position: relative;
    text-align: center;
    color: #fff;
    padding-top: 105px;
    padding-bottom: 110px;
    background-size: cover;
    background-position: center;
}

#page-banner[data-overlay]:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8); /* Data overlay value */
    z-index: 1;
}

#page-banner .container {
    position: relative;
    z-index: 2;
    max-width: 600px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    padding: 20px 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Form Heading */
#page-banner h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form label {
    font-size: 14px;
    font-weight: bold;
    color: #555;
    text-align: left;
}

form input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
}

form input:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

form button {
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    #page-banner {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    #page-banner .container {
        padding: 15px;
    }

    #page-banner h2 {
        font-size: 24px;
    }

    form input, form button {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    #page-banner {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    #page-banner h2 {
        font-size: 20px;
    }

    #page-banner .container {
        padding: 10px;
    }
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
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index-4.php" class="logo-container">
                                    <img class="logo-image" src="images/mi logo1.png" alt="Logo">
                                    <h2 class="logo-text">Misoftwar</h2>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                        
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="active" href="index-4.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="about.php">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="courses.php">Courses</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="events.php">Events</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.php">Events</a></li>
                                                <li><a href="events-singel.php">Event Update</a></li>
                                            </ul>
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
                                    <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
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

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/event/singel-event/se-1.jpg)">
        <div class="container">
        <h2>Update Upcoming Events</h2>
        <form action="process_event.php" method="post">
            <label for="event-date">Event Date</label>
            <input type="date" id="event-date" name="event_date" required>

            <label for="event-title">Event Title</label>
            <input type="text" id="event-title" name="event_title" placeholder="Enter event title" required>

            <label for="event-time">Event Time</label>
            <input type="text" id="event-time" name="event_time" placeholder="e.g., 10:00 AM - 3:00 PM" required>

            <label for="event-location">Event Location</label>
            <input type="text" id="event-location" name="event_location" placeholder="Enter event location" required>

            <button type="submit">Update Event</button>
        </form> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    

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
                                <li><a href="index-4.php"><i class="fa fa-angle-right"></i>HOME</a></li>
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

</body>

</html>
