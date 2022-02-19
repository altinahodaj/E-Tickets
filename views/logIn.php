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
    <?php
	include("../reusableCode/header.php");
	?>
        <div class="login">
            <div class="right-div">
                <img class="rightimg" src="../media/loginphoto.jpg">
            </div>
            <div class="left-div">
                <form class="login-form" onsubmit="return validate()">
                    <h1>E - Tickets</h1>
                    <h4>Welcome to E - Tickets</h4>
                    <input id="username" type="text" placeholder="Username">
                    <input id="password" type="password" placeholder="Password">
                    <img class="usericon" src="../media/usericon.png">
                    <img class="passwordicon" src="../media/passwordicon.png">
                    <button class="loginbutton">Log In</button>
                    <p>Not registered yet? <a class="register" href="./signUp.php">Create an account</a></p>
                    <p>or</p>
                    <button class="googlebutton"><img class="googleicon" src="../media/googleicon.png"><a class="googlelink" href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1">Sign in with Google</a></button>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer">
                <hr>
                <div class=firstfooter-div>
                    <ul>
                        <li><strong>E - Tickets</strong><br> Our Logo</li>
                        <li>E-Tickets</li>
                        <li>Our Community</li>
                        <li>Our Company</li>
                        <li>© E-Tickets, Inc. 2021. <br> We love our users!</li>
                    </ul>
                    <ul>
                        <li><a href="https://www.facebook.com/"><img src="../media/facebook.png"></a></li>
                        <li><a href="https://twitter.com/home"><img src="../media/twitter.png" ></a></li>
                        <li><a href="https://www.instagram.com/"><img src="../media/instagram.png"></a></li>
                        <li><a href="https://www.reddit.com/"><img src="../media/reddit.png"></a></li>
                    </ul>
                </div>       
            </div>
        </footer>
        <script src="../js/login.js"></script>
    </body>
</html>