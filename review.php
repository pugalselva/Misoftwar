<?php
include 'db.php';  // Assuming db.php is in the same directory as react.php
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
    header('Location: php.php');
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
    <div class="corses-tab mt-30">
        <ul class="nav nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                    aria-selected="false">Reviews</a>
            </li>
        </ul>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
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
                </div>
                <div class="title pt-15">
                    <h6>Leave A Comment</h6>
                </div>
                <div class="reviews-form">
                    <form action="review.php" method="POST">
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
                                    <input type="text" name="title" placeholder="Enter Title" required />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-singel">
                                    <div class="rate-wrapper">
                                        <div class="rate-label">Your Rating:</div>
                                        <div class="rate">
                                                                    <div class="rate-item">
                                                                        <i class="fa fa-star" aria-hidden="true" name></i>
                                                                    </div>
                                                                    <div class="rate-item">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="rate-item">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                        <div class="rate">
                                            <label name="rating"   value="1" required >
                                            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </label>
                                            <label name="rating"   value="1" required >
                                            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </label>
                                            <label name="rating"   value="1" required >
                                            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </label>
                                            <label name="rating"   value="1" required >
                                            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </label>
                                            <label name="rating"   value="1" required >
                                            <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </label>
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
            <!-- reviews cont -->
        </div>
    </div>
    <!-- tab content -->
    </div>
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
