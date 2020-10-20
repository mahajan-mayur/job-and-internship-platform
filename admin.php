<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if($_SESSION['user_type'] !== "admin"){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

</head>
<body>

<div class="header">
    <h2>Home Page</h2>
</div>

<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>


<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
    <h3>welcome <strong><?=  $_SESSION['username']; ?></strong></h3>
    <button><a href="logout.php">logout</a></button>
<?php endif ?>
</div>

</body>
</html>