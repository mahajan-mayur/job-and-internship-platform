<?php
session_start();
include('dbConfig.php');
// initializing variables



$errors = array();
    $msg = "";
// connect to db


if (isset($_POST['reg_user'])) {

    // register users
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $user_type = mysqli_real_escape_string($db, $_POST['user_type']);

    // form validation

    if (empty($username)) {
        array_push($errors, "");
        echo '<script>alert("Username is required")</script>';
    }

    if (empty($email)) {
        array_push($errors, "");
        echo '<script>alert("Email is required")</script>';
    }

    if (empty($password_1)) {
        array_push($errors, "");
        echo '<script>alert("Password is required")</script>';
    }

    if ($password_1 != $password_2) {
        array_push($errors, "");
        echo '<script>alert("Password does not match")</script>';
    }

    if (empty($user_type)) {
        array_push($errors, "");
        echo '<script>alert("Please select user type")</script>';
    }

    // check db for same username or email

    $user_check_query = "SELECT * FROM user WHERE username ='$username' or email ='$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "");
            echo '<script>alert("Username Already Exists")</script>';
        }

        if ($user['email'] === $email) {
            array_push($errors, "");
            echo '<script>alert("Mail Id already Exist")</script>';
        }
    }

    // Register the user if no error

    if (count($errors) == 0) {

        $password = password_hash($password_1,PASSWORD_BCRYPT); // this will encrypt password
        $query = "INSERT INTO user (username, email, password, user_type) VALUES ('$username', '$email', '$password','$user_type')";

        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";

        header('location: index.php');
    }
}


?>