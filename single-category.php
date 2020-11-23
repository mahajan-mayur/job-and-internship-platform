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
  <link href="bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css3.css" />


  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <style>
    @media(max-width:767px) {

      .navbar-brand {
        color: AppWorkspace;
        padding-top: 10px;
      }

      .navbar-brand h1 {
        padding-top: 10px;
      }

      .navbar-brand p {
        color: white;
        font-size: .6em;
        margin-top: 12px;
      }

      .navbar-brand p span {
        vertical-align: middle;
      }




      #collapsable-nav a span {
        font-size: 1em;
      }



      #call-btn {
        font-size: 1.5em;
        display: block;
        margin: 0 20px;
        padding: 3px;
        border: 2px solid #fff;
        background-color: floralwhite;
        color: cadetblue;
      }

      #xs-deliver {
        margin-top: 5px;
        font-size: .7em;
        letter-spacing: .1em;
        text-transform: uppercase;
      }

      .panel-footer section {
        margin-bottom: 30px;
        text-align: center;
      }

      .panel-footer section:nth-child(3) {
        margin-bottom: 0;
      }

      .panel-footer section hr {
        width: 50%
      }

      #menu-tile,
      #specials-tile {
        width: 260px;
        margin: 0 auto 15px;
      }

      .menu-item-photo {
        margin-right: auto;
      }

      .menu-item-tile .menu-item-price {
        text-align: center;
      }

      .menu-item-photo {
        margin-right: auto;
      }

      .menu-item-description {
        text-align: center;
      }
    }

    @media(max-width:479px) {
      .navbar-brand h1 {
        padding-top: 5px;
        font-size: 6vw;
      }

      .col-xxs-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        float: left;
        width: 100%;
      }

      .menu-item-photo {
        margin-right: auto;
      }

      .menu-item-description {
        text-align: center;
      }
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
      margin-top: 30px;
      padding: 0;
      box-shadow: 0 0 50px bisque;
      border: 2px solid bisque;
    }

    #menu-tile,
    #specials-tile,
    #map-tile {
      height: 250px;
      width: 100%;
      margin-bottom: 15px;
      position: relative;
      border: 2px solid bisque;
      overflow: hidden;
    }

    #menu-tile:hover,
    #specials-tile:hover,
    #map-tile:hover {
      box-shadow: 0 1px 5px 1px #cccccc;
    }

    #menu-tile span,
    #specials-tile span,
    #map-tile span {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 100%;
      text-align: center;
      font-size: 1.4em;
      text-transform: uppercase;
      background-color: #000;
      color: #fff;
      opacity: .8;
    }

    .category-tile {
      position: relative;
      border: 2px solid #3F0C1F;
      overflow: hidden;
      width: 200px;
      height: 200px;
      margin: 0 auto 15px;
    }

    .category-tile span {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 100%;
      text-align: center;
      font-size: 1.2em;
      text-transform: uppercase;
      background-color: #000;
      color: #fff;
      opacity: .8;
    }

    .category-tile:hover {
      box-shadow: 0 1px 5px 1px #cccccc;
    }

    h2 {
      color: dimgray;
    }

    #menu-categories-title+div {
      margin-bottom: 50px;
      color: dimgray;
    }
   
   
  </style>

</head>

<body>

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="project3.html" class="scrollto greenlink">Internship </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="login.php"><?= $_SESSION['username'];
                        ?></a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
<li ><a href="home.php">Home</a></li>
                    <li class="menu-active"><a href="jobAndInternship.php">Job  & Internship</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
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


               


                  <div class="container">
                    <table class="table">
                      <thead >
                        <tr>
                          <th>  </th>
                          <th> </th>
                          <th>  </th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                          <tr>
                            <td> <?php echo $row['job_tittle']; ?> </td>
                            <td><?php echo $row['cat']; ?></td>
                            <td><?php echo $row['sal']; ?></td>
                         <?php   echo "<td><a href='view.php?id=".$row['id']."'>View Job</td>"; ?>
                            <!-- <td> <button type="submit"  onclick = "window.location.href = "update_tanent.php?id= $id "  name="add_internship" class="btn btn-success ">View Details</button> -->

                          </tr>

                        <?php

                        }


                        mysqli_close($db);


                        ?>

                      </tbody>
                    </table>
                  </div>

             

              </div>

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