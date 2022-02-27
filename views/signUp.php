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
        <link rel="stylesheet" href="../style/signUp.css">
    </head>
    <body>
        <div class="signup">
            <div class="right-div">
                <form class="signup-form" action="../components/registerVerify.php" method="POST" onsubmit="return validate()">
                    <h1>Sign Up</h1>
                    <input id="name" name="register-name" type="text" placeholder="Name">
                    <input id="lastname" name="register-lastname" type="text" placeholder="Last Name">
                    <input id="username" name="register-username" type="text" placeholder="username">
                    <input id="email" name="register-email" type="text" placeholder="Email">
                    <input id="password" name="register-pass" type="password" placeholder="Password">
                    <input id="adress" name="register-add" type="adress" placeholder="adress">
                    <input id="creditcard" name="register-ccNo" type="number" placeholder="Credit Card Number">
                    <input id="city" name="register-city" type="city" placeholder="city">
                    <button name="register-btn" class="signupbutton">Sign Up</button>
                    <p>Already a member? <a class="login" href="./index.php">Log In</a></p>
                </form>
            </div>
            <div class="left-div">
                <img class="leftimg" src="../media/signup.jpg">
            </div>
        </div>
        <?php
        include("../reusableCode/footer.php");
    ?>
        <script src="../js/signup.js"></script>
    </body>
</html>