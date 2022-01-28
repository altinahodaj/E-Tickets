<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="../style/details.css" type="text/css">
</head>

<body>
<?php
	include("../reusableCode/header.php");
	?>
    <div class='container'>
        <div class='imageContainer'> 
            <img  class='fotoja1' src='../media/detailsphoto1.jpg'>
        </div>
        <div class='textContainer'>
            <p>Wrath of Man</p>
            <br/>
            <p>5$</p>
            <br/>
            <form method="POST">
                <input class='butoni' type="submit" value="Buy Ticket" name="buyT">      
            </form>          
            <br/>
            <br/>
            <p id='t1'>The moment you buy the ticket a QR code will be generated</p>
        </div>
    </div>

    <div class='container'>
        <div class='b1Container'>
            <p id='t2'>Watch trailer</p>
        </div>
        <div class='image2Container'>
            <iframe  class='fotoja2' allowfullscreen src='https://www.youtube.com/embed/EFYEni2gsK0'>
        </div>
    </div>
        <div class='container3'>
            <h4>Movie Synposis:</h4>
            <br>
        </div>
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
</body>
</html>