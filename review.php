
<?php

include 'db.php';

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
    header('Location: review.php');
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
    <link rel="stylesheet" href="css/stylepages.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        /* mi icon */
        .author-thumb {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        /* General Styling for the Form Container */
        #review-form-container {
            text-align: center;
            margin-top: 30px;
        }

        .reviews-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .form-singel {
            margin-bottom: 20px;
        }

        .form-singel input,
        .form-singel textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* icon */
        .rate-item i.selected {
            color: gold;
            /* Color for selected stars */
        }

        /* Styling for the Rating Section */
        .rate-wrapper {
            display: flex;
            align-items: center;
        }

        .rate-label {
            font-size: 16px;
            margin-right: 10px;
        }

        .rate {
            display: flex;
            gap: 5px;
        }

        .rate-item {
            font-size: 20px;
            cursor: pointer;
            color: #ccc;
            transition: color 0.3s ease;
        }

        .rate-item.selected {
            color: gold;
            /* Color for selected stars */
        }

        .rate-item:hover {
            color: #f39c12;
            /* Hover effect for stars */
        }

        /* Styling for the Submit Button */
        .main-btn {
            padding: 12px 20px;
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .main-btn:hover {
            background-color: #4cae4c;

        }

        /* Styling for the Submit Input Button */
        .submit-btn {
            padding: 12px 20px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .reviews-form {
                width: 100%;
                padding: 15px;
            }

            .rate-item {
                font-size: 18px;
            }

            .main-btn,
            .submit-btn {
                width: 100%;
            }
        }
        
    </style>
</head>

<body>
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
    <div class="corses-tab mt-30">

        <!-- <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab"> -->
        <div class="reviews-cont">
            <div class="title">
                <h6>Student Reviews</h6>
            </div>
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
                    <div class="form-group">
                        <input class="col-md-12 " type="submit" value="Commend Review" id="review-button">
                    </div>
                </div>
                <!-- Review Form (Initially Hidden) -->
                <div class="title pt-15" id="review-form-container" style="display:none;">
                    <h6>Leave A Comment</h6>
                </div>
                <div class="reviews-form" id="review-form" style="display:none;">
                    <form action="net.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-singel">
                                    <input type="text" name="name" placeholder="Enter Name" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-singel">
                                    <input type="email" name="email" placeholder="Enter Gmail" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-singel">
                                    <input type="text" name="title" placeholder="Enter Course Name" required />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-singel">
                                    <div class="rate-wrapper">
                                        <div class="rate-label">Your Rating:</div>
                                        <div class="rate">
                                            <input type="hidden" name="rating" id="rating-value" value="0" />
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
                                    <button type="submit" class="main-btn">Post Comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- tab content -->
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
                            <p>Welcome to Misoftwar Software Training. Our platform provides comprehensive tutorials,
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
    <script>
        $(document).ready(function() {
            // When the 'Commend Review' button is clicked
            $('#review-button').click(function(e) {
                e.preventDefault(); // Prevent default form submit (if any)

                // Toggle visibility of the review form
                $('#review-form-container').toggle();
                $('#review-form').toggle();
            });

            // Handle rating stars interaction
            $('.rate-item').click(function() {
                var ratingValue = $(this).data('value');
                $('#rating-value').val(ratingValue); // Set the hidden input's value to the selected rating
                $('.rate-item').each(function() {
                    if ($(this).data('value') <= ratingValue) {
                        $(this).addClass('selected');
                    } else {
                        $(this).removeClass('selected');
                    }
                });
            });
        });
    </script>
</body>

</html>
