<?php
// include "./session.php";

// include "db.php";
include 'database.php';

$obj = new DB();

$data = $obj->read_student();

?>
<!DOCTYPE html>
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

    <link rel="stylesheet" href="css/studentview.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->

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
                            <a href="#" class="logo-container">
                                <img class="logo-image" src="images/mi logo1.png" alt="Logo">
                                <!-- <h2 class="logo-text">Misoftwar</h2> -->
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
                                        <a  href="admin_dashboard.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="studentform.php">Student Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="update_event.php">Events</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="active" class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-bs-toggle="dropdown">
                                            Student Report
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./viewstudent.php">View Student Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                        <div class="right-icon text-right">
                            <ul>
                                <!-- <li><a href="#" id="search"><i class="fa fa-search"></i></a></li> -->
                                <li><a href="index.php"><i class="fa fa-sign-out"></i><span></span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER PART ENDS ======-->


    <div class="container-admin" style="margin-top: 10px;">
        <div class="search-container">
            <h1>Search Student Data</h1>
            <input type="text" id="searchInput" placeholder="Student ID or Name or Email" />
            <button onclick="searchStudent()" >Search</button>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th style="width:500px">Address</th>

                        <th>D.O.B</th>
                        <th>Qualification</th>
                        <th>Technology</th>
                        <th>Skills</th>
                        <th>Certification Done</th>
                        <th>Experience (Years)</th>
                        <th>Current CTC</th>
                        <th>Expected CTC</th>
                        <th>Language Required</th>
                        <th>Uploaded File</th>
                        <th> Profile Pic </th>
                        <th>EDIT</th>
                        <th>Delete</th>
                        <th>ID CARD</th>
                    </tr>
                </thead>
                <tbody id="studentTable">

                    <?php foreach ($data as $student_data){  ?>
                    <tr>
                        <td>Mi<?= substr($student_data['name'], 0, 3) . '' . $student_data['skills'] . '' . $student_data['id'] ?>
                        </td>
                        <td><?= $student_data['name'] ?></td>
                        <td><?= $student_data['phone'] ?></td>
                        <td><?= $student_data['gender'] ?></td>
                        <td><?= $student_data['email'] ?></td>
                        <td><?= $student_data['door_no'] . ' ' . $student_data['street'] . ' ' . $student_data['district'] . ' ' . $student_data['state'] . ' ' . $student_data['country'] . ' ' . $student_data['pincode'] ?>
                        </td>

                        <td><?= $student_data['dob'] ?></td>
                        <td><?= $student_data['qualification'] ?></td>
                        <td><?= $student_data['technology'] ?></td>
                        <td><?= $student_data['skills'] ?></td>
                        <td><?= $student_data['certification'] ?></td>
                        <td><?= $student_data['experience'] ?></td>
                        <td><?= $student_data['ctc'] ?></td>
                        <td><?= $student_data['expected_ctc'] ?></td>
                        <td><?= $student_data['language'] ?></td>
                        <td><?php if($student_data['resume_path']){?><a href="uploads/<?= $student_data['resume_path'] ?>"
                                download><?= $student_data['resume_path'] ?> Download</a><?php }?></td>
                        <td><?php if($student_data['pic_path']){?><a href="profile_pic/<?= $student_data['pic_path'] ?>"
                                download><?= $student_data['pic_path'] ?> Download</a><?php }?></td>
                        <!-- <td><a href="./studentedit.php?studentid=<?php echo $student_data['id']; ?>"> EDIT </a></td>
                        <td><a href="./delete.php?studentid=<?php echo $student_data['id']; ?>"> DELETE </a></td>
                        <td><a href="./invoice.php?studentid=<?php echo $student_data['id']; ?>"> view ID </a></td> -->
                         <td><a href="studentedit.php?studentid=<?= $student_data['id']; ?>" class="btn-edit">Edit</a></td>
                    <td><a href="delete.php?studentid=<?= $student_data['id']; ?>" class="btn-delete">Delete</a></td>
                    <td><a href="invoice.php?studentid=<?= $student_data['id']; ?>" class="btn-idcard">View ID</a></td>
                
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>


        </div>
        <div class="singel-form">
            <a href="./studentform.php" class="main-btn">+ New User</a>
        </div>

    </div>
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
                            <p>Welcome to Mi-Software Solutions LLP Software Training. Our platform provides comprehensive tutorials,
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // function searchStudent() {
        //     var input = document.getElementById("searchInput").value.toLowerCase();
        //     var rows = document.querySelectorAll("#studentTable tr");

        //     rows.forEach(row => {
        //         var studentData = row.innerText.toLowerCase();
        //         row.style.display = studentData.includes(input) ? "" : "none";
        //     });
        // }
        function searchStudent() {
        var input = document.getElementById("searchInput").value.toLowerCase();
        var rows = document.querySelectorAll("#studentTable tr");

        rows.forEach(row => {
            var studentData = row.innerText.toLowerCase();
            row.style.display = studentData.includes(input) ? "" : "none";
        });
    }
    </script>
</body>

</html>
