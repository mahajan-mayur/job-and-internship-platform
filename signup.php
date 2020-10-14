<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
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

                <form action="signup.php" method="post">
                <?php include('errors.php') ?>
                    <span class="Login ">
                        <h1>SIGN UP</h1>
                    </span>
                    <div class="inputbox">
                        <select class="field menu" >
                            <option value="n" disabled selected hidden>SELECT USER TYPE</option>
                            <option class="stud" value="STUDENT">STUDENT</option>
                            <option value="COMPANY">COMPANY</option>
                       
                        </select>

                        <input class="field "  type="text" name ="username" placeholder="USERNAME" ><br>

                        <input class="field" type="text" name ="email" placeholder="EMAIL" style="width: 100%;"><br>

                        <input class="field" type="password" name ="password_1" placeholder="PASSWORD" style="width: 100%;"><br>

                        <input class="field" type="password" name ="password_2" placeholder="REPEAT YOUR PASSWORD" style="width: 100%;"><br>

                        <button  class="btn btn-dark" type="submit"  name="reg_user">CREATE ACCOUNT</button>
                        
                    </div>
                </form>
            </div>
        </div>



    </div>





  
</body>

</html>