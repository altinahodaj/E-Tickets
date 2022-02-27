<?php 
    session_start();
?>

<!DOCTYPE html>
 <html>
 <head>


 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tickets</title>
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
               <a href='./details.php'>
                  <img class='photo' src="../media/detailsphoto1.jpg">
               </a>
            </div>

            <div  class='imgdiv'>
               <a href='details2.php'>
                  <img class='photo' src="../media/detailsphoto3.jpg">
               </a>
            </div>

            <div  class='imgdiv'>
            <a href='details4.php'>
                <img class='photo' src="../media/moviephoto1.jpg">
            </a>
                 
            </div>

            <div class='imgdiv'>
               <a href='details5.php'>
                    <img class='photo' src="../media/moviephoto2.jpg">
               </a>
            </div>

    </div>

    
    <div class=comedyContainer>

            <div class='comedytextContainer'> 
                 <p class='comedytext'><a href="./comedies.php#Comedies/">Comedy Movies to Watch Right Now</a></p>
            </div>

            <div class='photo2Container'>
               <a href='details6.php'>
                  <img class='photo' src="../media/comedy1.jpg">
               </a>     
            </div>

            <div class='photo2Container'> 
            <a href='details7.php'>
                  <img class='photo' src="../media/comedy2.jpg">
               </a>   
            </div>

    </div>

    <div class=actionContainer>

            <div class='photo3Container'>
            <a href='details9.php'>
                <img class='photo' src="../media/aksionphoto1.jpg">
            </a>
                 
            </div>

            <div class='photo3Container'> 
            <a href='details8.php'>
                 <img class='photo' src="../media/aksionphoto2.jpg">
            </a>
            </div>

            <div class='actiontextContainer'> 
               <p class='comedytext'><a href="./actions.php#Actions/">Action Movies to Watch Right Now</a></p>
            </div>

    </div>

    
    <div class=comedyContainer>  

            <div class='comedytextContainer'> 
               <p class='comedytext'><a href="./thriller.php#Thriller/">Thriller Movies to Watch Right Now</a></p>
            </div>

            <div class='photo2Container'>
               <a href='details10.php'>
                    <img class='photo' src="../media/triller1.jpg">
               </a>      
            </div>

            <div class='photo2Container'> 
               <a href='details3.php'>
                  <img class='photo' src="../media/detailsphoto5.jpg">
               </a>
            </div>

    </div>

    <div class=actionContainer>

<div class='photo3Container'>
     <a href='details11.php'>
           <img class='photo' src="../media/animated1.jpg">
     </a>   
</div>

<div class='photo3Container'> 
<a href='details12.php'>
           <img class='photo' src="../media/animated2.jpg">
     </a>  
</div>

<div class='actiontextContainer'> 
   <p class='comedytext'><a href="./animated.php#Animated/">Animated Movies to Watch Right Now</a></p>
</div>

</div>
      <?php
        include("../reusableCode/footer.php");
        ?>

 </body>

 </html>