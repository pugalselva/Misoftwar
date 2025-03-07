<?php
session_start(); // Start the session
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if username and password fields are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin_dashboard.php');
            exit();
        } else {
            echo "<p style='color:red;'>Invalid login details.</p>";
        }
    } else {
        echo "<p style='color:red;'>Please enter username and password.</p>";
    }
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
    <link rel="stylesheet" href="css/stylesheet.css">

    <!-- newstyle -->
    <link rel="stylesheet" href="css/stylepages.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- adminlogin. css -->
    <link rel="stylesheet" href="css/adminlogin.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .login-section {
            position: relative;
            height: 100vh;
            background: url('images/slider/sw-1.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .login-card {
            position: relative;
            z-index: 1;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .form-label {
            font-weight: 600;
            font-size: 16px;
            color: #333;
        }

        .input-group-text {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px 0 0 5px;
        }

        .form-control {
            height: 45px;
            font-size: 16px;
            border-radius: 0 5px 5px 0;
        }

        .btn-primary {
            width: 100%;
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        } */
    </style>
    <!-- stylesheet -->


</head>

<body>


    <!--====== PAGE BANNER PART START ======-->
    <section class="login-section">
        <div class="overlay"></div>
        <div class="login-card">
            <h2>Admin Login</h2>
            <form method="POST" action="">

                <!-- Username Field with Icon -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                </div>

                <!-- Password Field with Icon -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
    <!--
<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card p-4">
            <h2 class="text-center">Admin Login</h2>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div> -->

    <!--====== PAGE BANNER PART ENDS ======-->



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
