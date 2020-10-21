<?php
session_start();
include('dbConfig.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if ($_SESSION['user_type'] !== "company") {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

$errors = array();
    $msg = "";
if(isset($_POST['add_job'])){

    $username = $_SESSION['username'];
    $job_tittle = mysqli_real_escape_string($db, $_POST['job_tittle']);
    $cat = mysqli_real_escape_string($db, $_POST['cat']);
    $pos = mysqli_real_escape_string($db, $_POST['pos']);
    $sal = mysqli_real_escape_string($db, $_POST['sal']);
    $dtd = mysqli_real_escape_string($db, $_POST['dtd']);
    $abt = mysqli_real_escape_string($db, $_POST['abt']);
    $apply = mysqli_real_escape_string($db, $_POST['apply']);




      
        $que = "INSERT INTO company (username,job_tittle,cat,pos,sal,dtd,abt,apply) VALUES ('$username','$job_tittle','$cat','$pos','$sal','$dtd','$abt','$apply')";

        mysqli_query($db, $que);

        echo '<script>alert("data added sucessfully")</script>';
        

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD JOB</title>
    <link rel="stylesheet" href="css/job.css">
    <!-- bootstrap css 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark   fixed-top" style="background-color: #200e38;">

        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-right"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="#">Application</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="job.php">ADD JOB</a>
                        <a class="dropdown-item" href="internship.php">ADD INTERNSHIP</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="del.php">DELETE</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp <strong><?= $_SESSION['username']; ?></strong></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link glyphicon glyphicon-user" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a>
                </li>
            </ul>

        </div>
    </nav>


    <div class="container">
        <div class="row ">

            <div class="header col-sm-6">

                <h1>ADD JOBS</h1>
                <form action="job.php" method="post">
                <?php include('errors.php') ?>
                    <div class="form-group row">
                        <label for="jobName">JOB TITTLE</label>
                        <input type="text" class="form-control" name="job_tittle" placeholder="eg: web development in react " required>
                    </div>

                    <div class="form-group row">
                        <label for="category ml-5" style="padding: 5px;"required>Category &nbsp;</label>
                        <select class="form-control col-sm-5" name="cat">
                        <option value="" disabled selected hidden>SELECT USER TYPE</option>
                            <option value="web developer">WEB DEVELOPER</option>
                            <option value="java developer">JAVA DEVELOPER</option>
                            <option value="android developer">ANDROID DEVELOPER</option>
                            <option value="data analytics"> DATA ANALYTICS</option>
                            <option value="machine learning">MACHINE LEARNING</option>
                        </select>

                        <label for="pos" style="padding: 5px; ">No. of position</label>
                        <input type="number" class="form-control col-sm-2" placeholder="25" name="pos"required>
                    </div>


                    <div class="form-group row ">
                        <label for="sal " style="padding: 5px; padding-right:6%;">Salary </label>
                        <input type="number" class="form-control col-sm-3" name="sal" placeholder="salary" required>

                        <label for="dtd " style="padding: 5px;"> Start Date </label>
                        <input type="date" class="form-control col-sm-4" name="dtd" required></div>

                    <div class="form-group row">
                        <label for="abt">About the Job</label>
                        <textarea class="form-control" name="abt" rows="2" required></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="apply">Who can apply</label>
                        <textarea class="form-control" name="apply" rows="2" required></textarea>
                    </div>

                    <button type="submit"  name="add_job" class="btn btn-success col-sm-3">ADD JOB</button>

                </form>
            </div>
        </div>
    </div>


            </h3>
        </div>


</body>
<script>
function myFunction() {
  alert("added sucessfully");
}
</script>

</html>