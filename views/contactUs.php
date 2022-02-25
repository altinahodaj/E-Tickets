<?php 
    session_start();
?>

<!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="../style/contactUs.css" type="text/css">
 </head>
 <body>
 <?php
	include("../reusableCode/header.php");
	?>
	<div class='container'>
        <div class='photo1Container'>   
            <img class='fotoja1' src="../media/contactUs1.png" alt="Photo 1">
        </div>

        <div class='paragraphContainer1'>
            <p> Leave Us a Comment.</p>
            <p> We love interacting with our Users!</p>
        </div>
	</div>

    <div class='container'>
        <img class='fotoja2' src="../media/contactUs2.png" alt="Photo 1">
	</div>

    <div class='container3'>
        <form onsubmit="return validate()">
            <label>Email:</label>
            <input type="text" name='Email' id='emailinput' >
            <label>First Name:</label>
            <input type="text" name='Name' id='nameinput' >
            <label>Last Name:</label>
            <input type="text" name='LastName' id='lastNameinput'>
            <br/>
            <br/>
            <label>Message: </label><br>
            <textarea id='input4' name='Message'></textarea>
            <input type='submit' name='submit' value="Send" id="submit">
        </form>
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

 </body>
 
 </html>

 <script>
        const emailReg = /^[A-Za-z0-9+_.-]+@(.+)$/;
        
        function validate() {
            var email = document.getElementById("emailinput").value;
            var name = document.getElementById("nameinput").value;
            var lastname = document.getElementById("lastNameinput").value;
            var nmessage = document.getElementById("input4").value;
            
            if (email== "") {
                alert("Please enter the email.");
                return false;
            }
            else if(!emailReg.test(email)){
                alert("Please enter a valid email address.");
                return false;
            }
            else if (name== "") {
                alert("Please enter the name.");
                return false;
            }
            else if (lastname== "") {
                            alert("Please enter the lastname.");
                            return false;
                        }
            else if (nmessage== "") {
                            alert("Please enter the nmessage.");
                            return false;
            }
            else{
                alert('Message Sent Successfuly');
                return true;
            }
        } 
</script>