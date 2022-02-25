<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/header.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="header">
            <div class="leftheader-div">
                <ul>
                    <li><a href="./homepage.php"><strong>E - Tickets</strong></a></li>
                    <li><a href="./homepage.php">Home</a></li>
                    <li><a href="./movies.php">Movies</a></li>
                    <li><a href="./contactUs.php">Contact Us</a></li>
                    <li><a href="./details.php">Details</a></li>
                </ul>
            </div>
            <div class="rightheader-div">
                <ul>
                <?php 
            if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
                ?>
                 <li><a href="./dashboard.php">Dashboard</a></li>
                 <li><a href="../components/logout.php">LogOut</a></li>
            <?php
            }
            ?>
                <?php
            if(!(isset($_SESSION['role']) && $_SESSION['role'] == 0)){
                ?>
                    <li><a href="./logIn.php">LogIn</a></li>
                    <li><a href="./signUp.php">SignUp</a></li>
            <?php
            }
            ?>
            <?php 
            if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                ?>
                <li><a href="../components/logout.php">LogOut</a></li>
            <?php
            }
            ?>
            
                </ul>
            </div>
        </div>
</body>
</html>