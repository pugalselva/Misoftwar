<?php
include 'db.php';  // Assuming db.php is in the same directory as react.php
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data and validate
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Simulating successful email sending
    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
}
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
<link rel="stylesheet" href="css/styles.css">

<!--====== Responsive css ======-->
<link rel="stylesheet" href="css/responsive.css">

    <style></style>
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
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <!-- Contact Form Section -->
        <div class="col-lg-7 col-md-12">
            <div class="contact-from mt-30">
                <div class="section-title">
                    <h5>Contact Us</h5>
                    <h2>Keep in touch</h2>
                </div>
                <div class="main-form pt-45">
                    <form id="contact-form" action="contact-conn.php" method="post" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="singel-form form-group">
                                    <input name="name" type="text" placeholder="Your name" data-error="Name is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="singel-form form-group">
                                    <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="singel-form form-group">
                                    <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="singel-form form-group">
                                    <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form form-group">
                                    <textarea name="message" placeholder="Message" data-error="Please leave us a message." required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form">
                                    <button type="submit" class="main-btn">Send</button>
                                </div>
                                    <!-- <p id="messages"></p> -->
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
                <!-- Contact Address Section -->
                <div class="col-lg-5 col-md-12">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="cont">
                                        <h2>Salem:</h2>
                                        <p>Misoftwar
                                            No.78, Kudi Street,
                                            Umayalpuram,
                                            P.N. Palayam(T.K),
                                            Salem(D.T)-636119</p>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91 93440 23645</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>muthu22@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--====== CONTACT PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index-4.php" class="logo-container d-flex align-items-center">
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
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   $(document).ready(function () {
    $('#contact-form').on('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Disable the send button to prevent multiple submissions
        $('#contact-form button[type="submit"]').prop('disabled', true).text('Sending...');

        $.ajax({
            url: $(this).attr('action'), // Backend script URL
            type: $(this).attr('method'), // Form method (POST)
            data: $(this).serialize(), // Serialize form data
            dataType: 'json', // Expect JSON response
            success: function (response) {
                // Log the response to check what is returned by the backend
                console.log(response);

                if (response.status === 'success') {
                    // Show success message in alert
                    alert('Your message has been sent successfully!');

                    // Show success message on the page
                    $('#messages')
                        .text(response.message)
                        .css('color', 'green');
                    
                    // Optionally reset the form after success
                    $('#contact-form')[0].reset();

                    // Enable and reset button text
                    $('#contact-form button[type="submit"]').prop('disabled', true).text('Send');
                } else {
                    // Show error message for backend validation issues
                    $('#messages')
                        .text(response.message)
                        .css('color', 'red');

                    // Enable and reset button text
                    $('#contact-form button[type="submit"]').prop('disabled', false).text('Send');
                }
            },
            error: function (xhr) {
                // Log error response
                console.error(xhr);

                // Handle server errors
                const errorMessage = xhr.responseJSON?.message || 'An error occurred. Please try again later.';
                $('#messages')
                    .text(errorMessage)
                    .css('color', 'red');

                // Enable and reset button text
                $('#contact-form button[type="submit"]').prop('disabled', false).text('Send');
            }
        });
    });
});


</script>

    

</body>
</html>
