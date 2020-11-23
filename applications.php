<?php
session_start();
include('dbConfig.php');

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login .php');
}
if($_SESSION['user_type'] !== "company"){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}




$sql = "SELECT * FROM applications";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD INTERNSHIP</title>
    <link rel="stylesheet" href="css/job.css">
    <!-- bootstrap css 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  .table{
    color:red ;
    text-align: center;
  }

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark   fixed-top" style="background-color: #200e38;">

<a class="navbar-brand" href="#">Company Portal</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="nav-right"></div>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="nav navbar-nav ">
    <li class="nav-item active">
      <a class="nav-link" href="company.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link" href="applications.php">Application</a>
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
      <a class="nav-link " href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp <strong><?=$_SESSION['username']; ?></strong></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link glyphicon glyphicon-user" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a>
    </li>
  </ul>

</div>
</nav>


    <div class="container">
        <div class="row ">

        <table class="table">
                      <thead >
                        <tr>
                          <th>  </th>
                          <th> <th>
                         
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                          <tr>
                            <td> <?php echo $row['username']; ?> </td>
                            <td> <?php echo $row['job_tittle']; ?> </td>
                            
                          </tr>

                        <?php

                        }


                        mysqli_close($db);


                        ?>

                      </tbody>
                    </table>

    </div>
    </div>






</body>


</html>