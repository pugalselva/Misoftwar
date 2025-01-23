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
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" placeholder="Your Email"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" placeholder="Your Phone"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <select id="course" name="course" required>
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
                                            <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>
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
    <script src="js/main.js"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>
    <!-- <script>
        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phonePattern = /^[0-9]+$/;

            if (!name) {
                alert("Please enter your name.");
                return false;
            }

            if (!email || !emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (!phone || !phonePattern.test(phone)) {
                alert("Please enter a valid phone number with digits only.");
                return false;
            }

            // alert("Form submitted successfully!");
            Swal.fire({
                title: "Good job!",
                text: "Signed Up Successfully !",
                icon: "success"
            });
            // Add your form submission logic here
            window.location.href = "index.php";
            //return true;
        }
    </script> -->
    <script>
        async function validateForm() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            if (name && email && phone) {
                // Prepare form data
                const formData = new FormData();
                formData.append('name', name);
                formData.append('email', email);
                formData.append('phone', phone);

                try {
                    const response = await fetch('', { // PHP file to handle data
                        method: 'POST',
                        body: formData,
                    });

                    const result = await response.text();

                    if (response.ok) {
                        alert(result);
                        closePopup();
                        window.location.href = 'index.php'; // Redirect to a thank-you page
                    } else {
                        alert('Submission failed. Please try again.');
                    }
                } catch (error) {
                    console.error('Error submitting form:', error);
                    alert('An error occurred. Please try again.');
                }
            } else {
                alert('Please fill in all fields.');
            }
        }

        function closePopup() {
            document.getElementById('popupWrapper').style.display = 'none';
        }

        window.onload = function() {
            document.getElementById('popupWrapper').style.display = 'flex';
        };
    </script>

    <!-- function showHostname() {
        let currentURL = window.location.hostname;
        alert("The hostname of the current URL is: " + currentURL);
    } -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
