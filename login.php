<?php


$error_msg = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_usr'])) {
    do_login();
}


function do_login()
{
    // Include config file
    require_once 'dbConfig.php';

    // Define variables and initialize with empty values
    $username = $password = "";
    global  $error_msg;
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $error_msg = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $error_msg = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
        //$password = md5($password);
    }

    $userType = trim($_POST["userType"]);


    // Validate credentials
    if (!empty($error_msg)) {
        echo "Oops! Something went wrong. Please try again later.";
        return;
    }
    // Prepare a select statement
    $sql = "SELECT id, username, password , user_type FROM user WHERE username = ?";

    if ($stmt = mysqli_prepare($db, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set parameters
        $param_username = $username;

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);

            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) != 1) {
                // Display an error message if username doesn't exist
                $error_msg = "No account found with that username.";
                return;
            }
            // Bind result variables
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $db_userType);
            if (mysqli_stmt_fetch($stmt)) {
                if (!password_verify($password, $hashed_password)) {
                    // Display an error message if password is not valid
                    $error_msg = "The password you entered was not valid.";
                    return;
                }
                if ($userType !== $db_userType) {
                    // Display an error message if userType is not same
                    $error_msg = "The invalid userType";
                    return;
                }
                // Password is correct, so start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedIn"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $_SESSION["user_type"] = $userType;

                if ($userType == "admin") {
                    header("location: admin.php");
                    return;
                }
                 if($userType == "student"){
                    header("location: student.php");
                    return;
                }
             if ($userType == "company"){
             header("location: company.php");
                return;
            }
            }
        }

    }

    // Close statement
    mysqli_stmt_close($stmt);

// Close connection
    mysqli_close($db);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

</head>

<body>


<div class="container">
    <div class="row">
        <div class="box ">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                       
                            <span class="Login ">
                                <h1>LOGIN</h1>
                            </span>
                <div class="rad">
                    <label class="radio-inline">
                        <input type="radio" value="student" name="userType" checked>Student
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="company" name="userType">Company
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="admin" name="userType">Admin
                    </label>
                </div>
                <div class="inputbox">
                    <input class="field" type="text" placeholder="USERNAME" name="username" required>
                    <input class="field" type="password" placeholder="PASSWORD" name="password" required><br>
                    <button type="submit" name="login_usr" class="btn btn-dark">LOG IN</button>

                </div>
                <h5 class="text-danger text-center"><?= $error_msg; ?></h5>
            </form>
        </div>
    </div>
</div>
</body>
</html>