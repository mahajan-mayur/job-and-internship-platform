<?php
session_start();
include('dbConfig.php');

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login .php');
}
if($_SESSION['user_type'] !== "student"){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}




$sql = "SELECT job_tittle, cat, pos, sal, dtd, abt, id  FROM internship";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css3.css" />

    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


</head>
<body>

    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <h1><a href="project2.html" class="scrollto greenlink">About Us</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="#"><?= $_SESSION['username'];
                        ?></a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
<li ><a href="home.php">Home</a></li>
                    <li ><a href="jobAndInternship.php">Job  & Internship</a></li>
                    <li class="menu-active"><a href="aboutUs.php">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="./images/pro2.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>About Us</h2>
                                <p>This is dummy information</p>

                            </div>
                        </div>
                    </div>



                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
    </section>


    <footer class="panel-footer">
        <div class="container">

            <div class="row">

                <section id="Hours" class="col-sm-4">
                    <span>Made By:</span><br />
                    Aditya Kuchekar<br />
                    Mayur Mahajan<br />
                    Vihang Lawand
                    <hr class="visible-xs " />
                </section>

                <section id="Address" class="col-sm-4">
                    <span>Contact:</span><br />
                    SKNCOE IT Department<br />
                    Sinhagad Institute, Pune.
                    <p>This is our First Project</p>
                    <hr class="visible-xs " />

                </section>

                <section id="testimonials" class="col-sm-4">
                    <p>Offers great job opportunities for freshers to work with great companies boost their carier</p>
                    <p>Offers great internship opportunities for student to have internships in reputed companies.</p>
                </section>

            </div>

            <div class="text-center">&copy; Copywrite Job & Internship Listing 2020</div>

        </div>
    </footer>


</body>
</html>
