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
    <link rel="stylesheet" href="../style/movies.css" type="text/css">
    
 </head>
 <body>
 <?php
	include("../reusableCode/header.php");
	?>

    <div class=hitsContainer>

            <div class='hitstextContainer'> 
                 <p class='hitstext'> Hits Breaking Records</p>
            </div>

            <div  class='imgdiv'>
               <a href='./details.html'>
                  <img class='photo' src="../media/detailsphoto1.jpg">
               </a>
            </div>

            <div  class='imgdiv'>
               <a href='details2.html'>
                  <img class='photo' src="../media/detailsphoto3.jpg">
               </a>
            </div>

            <div  class='imgdiv'>
            <a href='details4.html'>
                <img class='photo' src="../media/moviephoto1.jpg">
            </a>
                 
            </div>

            <div class='imgdiv'>
               <a href='details5.html'>
                    <img class='photo' src="../media/moviephoto2.jpg">
               </a>
            </div>

    </div>

    
    <div class=comedyContainer>

            <div class='comedytextContainer'> 
                 <p class='comedytext'>Comedy Movies to Watch Right Now</p>
            </div>

            <div class='photo2Container'>
               <a href='details6.html'>
                  <img class='photo' src="../media/comedy1.jpg">
               </a>     
            </div>

            <div class='photo2Container'> 
            <a href='details7.html'>
                  <img class='photo' src="../media/comedy2.jpg">
               </a>   
            </div>

    </div>

    <div class=actionContainer>

            <div class='photo3Container'>
            <a href='details9.html'>
                <img class='photo' src="../media/aksionphoto1.jpg">
            </a>
                 
            </div>

            <div class='photo3Container'> 
            <a href='details8.html'>
                 <img class='photo' src="../media/aksionphoto2.jpg">
            </a>
            </div>

            <div class='actiontextContainer'> 
                 <p class='actiontext'>Action Movies to Watch Right Now</p>
            </div>

    </div>

    
    <div class=comedyContainer>  

            <div class='comedytextContainer'> 
                 <p class='comedytext'>Triller Movies to Watch Right Now</p>
            </div>

            <div class='photo2Container'>
               <a href='details10.html'>
                    <img class='photo' src="../media/triller1.jpg">
               </a>      
            </div>

            <div class='photo2Container'> 
               <a href='details3.html'>
                  <img class='photo' src="../media/detailsphoto5.jpg">
               </a>
            </div>

    </div>

    <div class=actionContainer>

<div class='photo3Container'>
     <a href='details11.html'>
           <img class='photo' src="../media/animated1.jpg">
     </a>   
</div>

<div class='photo3Container'> 
<a href='details12.html'>
           <img class='photo' src="../media/animated2.jpg">
     </a>  
</div>

<div class='actiontextContainer'> 
     <p class='actiontext'>Animated Movies to Watch Right Now</p>
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

 </body>

 </html>