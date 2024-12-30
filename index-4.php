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
                                            <li><a href="events-singel.php">Event Singel</a></li>
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
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part-3" class="bg_cover"  style="background-image: url(images/slider/s-3.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>Search for preferred courses</h2>
                        <span>More than courses for you</span>
                        <div class="slider-search mt-65">
                            <form action="#">
                                <div class="row no-gutters">
                                    <div class="col-sm-2">
                                        <select id="category-dropdown">
                                            <option value="">Category</option>
                                            <option value="frontend">Frontend</option>
                                            <option value="backend">Backend</option>
                                            <option value="database">Database</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select id="courses-dropdown">
                                            <option value="">Courses</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" id="search-keyword" placeholder="Search keyword">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="button" class="main-btn" id="search-button">Search Now</button>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div>
                    </div> <!-- slider cont3 -->
                </div>
            </div>
            <div class="slider-feature pt-30 d-none d-md-block">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/man.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>4000+</h3>
                                <span>Worldwide Students</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/book.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>10+</h3>
                                <span>Available Courses</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/expert.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>Expert Instructor</h3>
                                <span>Expert Instructors</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                </div> <!-- row -->
            </div> <!-- slider feature -->
        </div> <!-- container -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-3" class="category-2-items pt-50 pb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/python.jpeg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>UI/UX <br>design</h5>
                                <!-- <span>"HTML", "CSS", "JavaScript", "ReactJS", "AngularJS"</span> -->
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/uix.jpeg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Programming  </h5>
                                <!-- <span>"PHP", "Python", ".NET Framework", "Core Java"</span> -->
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/uix.jpeg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Database</h5>
                                <!-- <span>MYSQL</span> -->
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/java.jpeg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5> UI/UX <br>design</h5>
                                <!-- <span>24 courses</span> -->
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    
    
    <!--====== CATEGORY PART ENDS ======-->
    
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/py2.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="courses-detail.php"><h4>Introduction to Python <br> Programming</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/html.png" alt="hmtl" width="800px" height="600px">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="web.php"><h4>Web Development With HTML, <br> CSS, and Javascript</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/react1.png" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="react.php"><h4>ReactJS</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/angular.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>AngularJS</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/php.png" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="php.php"><h4>PHP</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/mysql.png" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="sql.php"><h4>MYSQL</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/net.png" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="net.php"><h4>.Net Framework</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/corejava.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="core-java.php"><h4>Core Java</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/spring.png" alt="Course">
                            </div>
                            <div class="price">
                                <span>Join</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="courses-singel.php"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="spring.php"><h4>Spring Framework</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>
    <style>
       

</style>



    <!--====== COURSE PART ENDS ======-->
    <!-- Popup Container -->
<div class="popup-wrapper" id="popupWrapper">
    <div class="popup-content">
        <div class="popup-close-btn" onclick="closePopup()">&times;</div>
        <div class="form-wrapper">
            <div class="form-header text-center">
                <h3>Free Enquiry!</h3>
                <span>Sign up now</span>
            </div>
            <div class="form-body">
                <form id="enquiryForm" action="#">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Your Mail" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone" placeholder="Your Phone" required>
                    </div>
                    <div class="form-group">
                        <button class="submit-btn" type="button" onclick="validateForm()">Get it Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!--====== COUNT DOWN PART START ======-->
    
    <section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="count-down-cont pt-50">
                        <h3>Free online and offline demo </h3>
                        <h2>Sign up Now</h2>
                        <div data-countdown="2019/03/01"></div>
                    </div> <!-- count down cont -->
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Free Enquiry!</h3>
                            <span>Sign up now </span>
                        </div>
                        <div class="main-form">
                            <form id="demoForm" action="#">
                                <div class="singel-form">
                                    <input type="text" id="name" placeholder="Your name" required>
                                </div>
                                <div class="singel-form">
                                    <input type="email" id="email" placeholder="Your Mail" required>
                                </div>
                                <div class="singel-form">
                                    <input type="text" id="phone" placeholder="Your Phone" required>
                                </div>
                                <div class="singel-form">
                                    <button class="main-btn" type="button" onclick="validateForm()">Get it Now</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COUNT DOWN PART ENDS ======-->
    
    <!--====== COUNTER PART START ======-->
    
    
    
    <!--====== COUNTER PART ENDS ======-->
    
    <!--====== EVENT 2 PART START ======-->
    
    <section id="event-part" class="pt-120 pb-120">
        <div class="container">
            <div class="event-bg bg_cover" style="background-image: url(images/bg-3.jpg)">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming events</h3>
                            </div> <!-- event title -->
                            <ul>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.php"><h4>Campus clean workshop</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.php"><h4>Tech Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.php"><h4>Enviroement conference</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                            </ul> 
                        </div> <!-- event 2 -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== EVENT 2 PART ENDS ======-->
    
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-65 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-50 pb-25">
                        <h5>Top Tutors</h5>
                        <h2>Placement Students</h2>
                    </div> <!-- section title -->
                    <div class="teachers-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h5>Dr. Anjali Rao</h5></a>
                                        <p>Python </p>
                                        <span><i class="fa fa-book"></i>12 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-2.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h5>Mr. Ravi </h5></a>
                                        <p>Reactjs </p> 
                                        <span><i class="fa fa-book"></i>08 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-2.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h5>Ms. Priya Sharma</h5></a>
                                        <p>Web Development </p>
                                        <span><i class="fa fa-book"></i>15 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h5>Mr. Arjun Mehta</h5></a>
                                        <p>Core java </p> 
                                        <span><i class="fa fa-book"></i>09 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers 2 -->
                </div>
                <div class="col-lg-6">
                    <div class="happy-student mt-55">
                        <div class="happy-title">
                            <h3>Happy Graduates from Misoftwar</h3>
                        </div>
                        <div class="student-slied">
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>“The Misoftwar program provided me with invaluable hands-on experience and practical skills that helped me secure a position as a Junior Developer. I couldn't be happier!”</p>
                                <h6>Riya Singh</h6>
                                <span>Junior Developer, CodeCrafters</span>
                            </div> <!-- singel student -->
                            
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>“The mentorship and networking opportunities at Misoftwar were instrumental in my career. I connected with industry leaders and landed a role as a Full Stack Developer.”</p>
                                <h6>Vikram Patel</h6>
                                <span>Full Stack Developer, NextGen Solutions</span>
                            </div> <!-- singel student -->
                            
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>“Completing the Misoftwar course equipped me with the skills and confidence to excel in the tech industry. I am now a proud Software Engineer!”</p>
                                <h6>Neha Joshi</h6>
                                <span>Software Engineer, Future Tech</span>
                            </div> <!-- singel student -->
                        </div> <!-- student slied -->
                        <div class="student-image">
                            <img src="images/teachers/teacher-2/happy.png" alt="Image">
                        </div>
                    </div> <!-- happy student -->
                </div>
            </div> <!-- row -->
        </div> <!-- container --><!-- container --> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-115 pb-110">
         <!-- container -->
         <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
            <div class="container">
                    <div class="row text-center">
                        <h1>Our Clients</h1>
                    </div>
                <div class="row justify-content-center">
                    <!-- Repeatable Client Logo -->
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-1.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-2.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-3.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-4.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-5.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-6.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-7.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-8.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-9.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-10.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-11.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 mt-40">
                        <div class="singel-patnar text-center">
                            <img src="images/patnar-logo/proj-12.jpg" alt="Client Logo" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    
    
    
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
                                    <p class="Con ml-3">Idhaya Engineering College for Women, Chinna Salem.</p>
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
    <script>
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
    
            alert("Form submitted successfully!");
            return true;
        }
    </script>
<script>
    // Course data mapped by categories
    const coursesData = {
        frontend: [
            { value: "html", text: "HTML" },
            { value: "css", text: "CSS" },
            { value: "javascript", text: "JavaScript" },
            { value: "reactjs", text: "ReactJS" },
            { value: "angularjs", text: "AngularJS" }
        ],
        backend: [
            { value: "php", text: "PHP" },
            { value: "python", text: "Python" },
            { value: ".net", text: ".NET Framework" },
            { value: "core-java", text: "Core Java" },
            { value: "spring-framework", text: "Spring Framework" }
        ],
        database: [
            { value: "mysql", text: "MYSQL" }
        ]
    };

    // Dropdown elements
    const categoryDropdown = document.getElementById("category-dropdown");
    const coursesDropdown = document.getElementById("courses-dropdown");

    // Function to handle category change and populate courses dropdown
    function handleCategoryChange(selectedCategory) {
        // Clear existing options in the courses dropdown
        coursesDropdown.innerHTML = '<option value="">Courses</option>';

        // Populate courses dropdown if category exists in data
        if (coursesData[selectedCategory]) {
            coursesData[selectedCategory].forEach(course => {
                const option = document.createElement("option");
                option.value = course.value;
                option.textContent = course.text;
                coursesDropdown.appendChild(option);
            });
        }
    }
    // Initialize dropdown with event listener
    categoryDropdown.addEventListener("change", () => {
        handleCategoryChange(categoryDropdown.value);
    });
</script>
<script>
function closePopup() {
    document.getElementById('popupWrapper').style.display = 'none';
}

function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;

    if (name && email && phone) {
        alert('Form submitted successfully!');
        closePopup();
    } else {
        alert('Please fill in all fields.');
    }
}

window.onload = function() {
    document.getElementById('popupWrapper').style.display = 'flex';
};
</script>


</body>

</html>
