<?php
session_start();

// Check if enquiry page has already been shown
// if (isset($_SESSION['enquiry_shown'])) {
//     header('Location: index.php'); // Redirect if already visited
//     exit();
// }

// Set session to mark that the enquiry page was visited
// $_SESSION['enquiry_shown'] = false;
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
<style>
     .form-body {
        overflow-y: scroll; 
        scrollbar-width: none; 
        -ms-overflow-style: none; 
    }

    .form-body::-webkit-scrollbar {
        display: none; 
    }
</style>

</head>

<body>


    <!--====== COUNT DOWN PART START ======-->

    <section id="count-down-part" class="bg_cover" data-overlay="8"
        style="background-image: url(images/bg-2.jpg);height: 100vh;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 offset-lg-0 col-md-10">
                    <div class="popup-wrapper" id="popupWrapper">
                        <div class="popup-content">
                            <div class="popup-close-btn" onclick="closePopup()">&times;</div>
                            <div class="form-wrapper">
                                <div class="form-header text-center">
                                    <h3>Free Enquiry!</h3>
                                    <span>Sign up now</span>
                                </div>
                                <div class="form-body">
                                    <form id="enquiryForm" method="POST" action="index.php">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" placeholder="Your Name"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Your Email"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" placeholder="Your Phone"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <select id="course" name="course" >
                                                <option value="">Select Course</option>
                                                <option value="web.php">HTML</option>
                                                <option value="web.php">CSS</option>
                                                <option value="web.php">JavaScript</option>
                                                <option value="react.php">Reactjs</option>
                                                <option value="angular.php">Angularjs</option>
                                                <option value="php.php">PHP</option>
                                                <option value="sql.php">MYSQL</option>
                                                <option value="net.php">.Net Framework</option>
                                                <option value="core-java.php">Core-Java</option>
                                                <option value="spring.php">Spring Framework</option>
                                            </select>
                                        </div> 
                                        <div class="form-group" >
                                            <textarea id="message" name="message" placeholder="Your Message" rows="4" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="submit-btn" type="submit">Get it Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>
    <script>

        // function closePopup() {
        //     document.getElementById('popupWrapper').style.display = 'none';
        // }

        // window.onload = function() {
        //     document.getElementById('popupWrapper').style.display = 'flex';
        // };
    </script>
    <script>
        function closePopup() {
            document.getElementById('popupWrapper').style.display = 'none';
            window.location.href = 'index.php'; // Redirect after closing
        }
    </script>

    <!-- function showHostname() {
        let currentURL = window.location.hostname;
        alert("The hostname of the current URL is: " + currentURL);
    } -->
    
</body>

</html>
