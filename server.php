<?php
session_start();

//initializing variables

$username ="";
$email ="";
$errors = array();


//connect to db

$db =mysqli_connect('localhost','root','','intern') or die("could not connect to database");


if (isset($_POST['reg_user'])) {

//register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
$user_type = mysqli_real_escape_string($db, $_POST['user_type']);


//form validation

if(empty($username)) {array_push($errors, "");
    echo '<script>alert("Username is required")</script>';
 }

if(empty($email)){array_push($errors, "");
    echo '<script>alert("Email is required")</script>'; 
}

if(empty($password_1)){array_push($errors, "");
    echo '<script>alert("Password is required")</script>';
 }

if($password_1 != $password_2){array_push($errors, "");
    echo '<script>alert("Password does not match")</script>'; 
}

if(empty($user_type)) {array_push($errors, "");
    echo '<script>alert("Please select user type")</script>';
 }


//check db for same username or email


$user_check_query = "SELECT * FROM user WHERE username ='$username' or email ='$email' LIMIT 1";
$results =mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);


if($user){
if($user['username'] === $username){array_push($errors,"");
    echo '<script>alert("Username Already Exists")</script>';
    }

if($user['email'] === $email){array_push($errors,"");
    echo '<script>alert("Mail Id already Exist")</script>';
    }

}



//Register the user if no error

if(count($errors)==0){

    $password =md5($password_1); //this will encrypt password
    $query = "INSERT INTO user (username, email, password, user_type) VALUES ('$username', '$email', '$password','$user_type')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');

        }
}



    //login user



    if(isset($_POST['login_usr'])){

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password_1']);
        $radioVal = mysqli_real_escape_string($db, $_POST["optradio"]);

    
        // make sure form is filled properly

        if (empty($username)) {
            array_push($errors, "Username is required");
             }
        if (empty($password)) {
            array_push($errors, "Password is required");
            }
    


        // attempt login if no errors on form


        if (count($errors) == 0) {

            $password = md5($password);
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
            $results = mysqli_query($db, $query);
    
            if (mysqli_num_rows($results) ) { 

                // check if user is admin or user

                 $logged_in_user = mysqli_fetch_assoc($results);

                        if($radioVal == "admin"){
                            if ($logged_in_user['user_type'] == 'admin') {
    
                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";
                                header('location: admin/home.php');	
                                 }
                            else{
                                echo '<script>alert("Wrong user type selected")</script>';
                                 } 
                            }
                	
        else if ($radioVal == "student"){
            if ($logged_in_user['user_type'] == 'student'){

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
    
                header('location: index.php');
    
            }
            else{
                echo '<script>alert("Wrong user type selected")</script>';
            }   
        }
            else if ($radioVal == "company"){

                if ($logged_in_user['user_type'] == 'company'){

                    $_SESSION['username'] = $logged_in_user;
                    $_SESSION['success']  = "You are now logged in";
            
                    header('location: company.php');
        
                } 
                else{
                    echo '<script>alert("Wrong user type selected")</script>';
                } 
            }   
            else {
                array_push($errors, "Wrong username/password combination");
                }
    }
        }
}
   ?>