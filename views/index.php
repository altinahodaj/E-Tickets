<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Tickets</title>
        <link rel="stylesheet" href="../style/logIn.css">
    </head>
    <body>
        <div class="login">
            <div class="right-div">
                <img class="rightimg" src="../media/loginphoto.jpg">
            </div>
            <div class="left-div">
                <form class="login-form" action="../components/loginVerify.php" method="post">
                    <h1>E - Tickets</h1>
                    <h4>Welcome to E - Tickets</h4>
                    <input name="username" id="username" type="text" placeholder="Username">
                    <input name="password" id="password" type="password" placeholder="Password">
                    <img class="usericon" src="../media/usericon.png">
                    <img class="passwordicon" src="../media/passwordicon.png">
                    <button name="loginbtn" class="loginbutton">Log In</button>
                    <p>Not registered yet? <a class="register" href="./signUp.php">Create an account</a></p>
                    <p>or</p>
                    <button  type="submit" class="googlebutton"><img class="googleicon" src="../media/googleicon.png"><a class="googlelink" href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1">Sign in with Google</a></button>
                </form>
            </div>
        </div>
        <?php
        include("../reusableCode/footer.php");
        ?>
        <script src="../js/login.js"></script>
    </body>
</html>