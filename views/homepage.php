<?php 
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Tickets</title>
        <link rel="stylesheet" href="../style/homepage.css">
    </head>
    <body>
        <?php
        include("../reusableCode/header.php");
        ?>
        <div class="main">
            <div class="first-main">
                <img class="cinema" src="../media/homepage-cinema.jpg">
                <p>Buy online tickets for your favourite movies</p>
                <a class="aboutUs" href="aboutUs.php">About Us</a>
                <label class="about"><a href="aboutUs.php"><img class="play" src="../media/play.png"></a></label>
            </div>
        </div>
        <label class="trending">Trending Now</label>
        <div class="second-main">
            <div class="movies">
                <ul>
                    <li><button class="b1" type="radio" onclick="return validate2()" ></button></li>
                    <li><img name='pic1' class="movie" src="../media/aksionphoto1.jpg"></li>
                    <li><img name='pic2' class="movie" src="../media/gk.jpg"></li>
                    <li><img name='pic3' class="movie" src="../media/w.jpg"></li>
                    <li><img name='pic4' class="movie" src="../media/tj.jpg"></li>
                    <li><button class="b1" type="radio" onclick="return validate1()"></button></li>
                </ul>
            </div>
        </div>
        <div class="third-main">
        <label class="fourth">What's happening in the movie industry?</label>
            <div class="industry">
                <ul>
                    <ul>
                        <li><img src="../media/firstN.jpeg"></li>
                        <li><strong>Academy Awards ratings plummet to all-time low as viewership drops below 10 million</strong><br><br>
                            <?php
                                $object = new ArticleMapper();
                                $object->getDescriptionByType('oscar-ceremony');
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li><br><img src="../media/secondN.jpg"></li>
                        <li><strong>Peelable and Resealable Films Market Segments, Opportunity, Growth and Forecast by End-use Industry 2018-2028</strong><br><br>
                            <?php
                                $object = new ArticleMapper();
                                $object->getDescriptionByType('industries');
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li><br><img src="../media/thirdN.jpg"></li>
                        <li><strong>Here’s Why The Future Of Movie Theaters May Be Brighter Than It Looks</strong><br><br>
                            <?php
                                $object = new ArticleMapper();
                                $object->getDescriptionByType('rules');
                            ?>
                        </li>
                    </ul>
                </ul>
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

<script>
    var src = [];
    
    src[0] = './media/tj.jpg';
    src[1] = '..';
    src[2] = '..';
    src[3] = '..';

    src[4] = './media/tj.jpg';
    src[5] = '..';
    src[6] = '..';
    src[7] = '..';

function validate() {
 

  document.pic1.src= src[0];
  document.pic2.src= src[1];
  document.pic3.src= src[2];
  document.pic4.src= src[3];


}
i=0;
         var images = [];

         images[0] = '../media/aksionphoto1.jpg';
         images[1] = '../media/gk.jpg';
         images[2] = '../media/w.jpg';
         images[3] = '../media/tj.jpg';

         images[4] = '../media/triller1.jpg';
         images[5] = '../media/triller2.jpg';
         images[6] = '../media/moviephoto1.jpg';
         images[7] = '../media/moviephoto2.jpg';

         images[8] = '../media/animated1.jpg';
         images[9] = '../media/animated2.jpg';
         images[10] = '../media/comedy1.jpg';
         images[11] = '../media/comedy2.jpg';
         
         
function validate1() {
         
         if(i < 4){
            i=0;

            i++;
            i++;
            i++;
            i++;
            document.pic1.src= images[i];
            i++;
            document.pic2.src= images[i];
            i++;
            document.pic3.src= images[i];
            i++;
            document.pic4.src= images[i]; // i= 7
         }
         else if(i < 8 || i==9 && i > 3 || i==9){
            i=7;
            i++;
            document.pic1.src= images[i];
            i++;
            document.pic2.src= images[i];
            i++;
            document.pic3.src= images[i];
            i++;
            document.pic4.src= images[i]; // i= 11
         }
         else{
             i=0;
             document.pic1.src= images[i];
             i++;
             document.pic2.src= images[i];
             i++;
             document.pic3.src= images[i];
             i++;
             document.pic4.src= images[i];
             i=0;
     }
  }
  function validate2() {
         if(i < 4){
             i=images.length -1;
             document.pic4.src= images[i];
             i--;
             document.pic3.src= images[i];
             i--;
             document.pic2.src= images[i];
             i--;
             document.pic1.src= images[i]; // i = 8
         }
         else if((i > 3 && i <= 8 && i !=7) || i == 11){
             i=4;
             document.pic1.src= images[i];
             i++;
             document.pic2.src= images[i];
             i++;
             document.pic3.src= images[i];
             i++;
             document.pic4.src= images[i]; 
             i=9;
         }
         else if((i > 8 || i==7) && i != 11){
            i=0;
             document.pic1.src= images[i];
             i++;
             document.pic2.src= images[i];
             i++;
             document.pic3.src= images[i];
             i++;
             document.pic4.src= images[i];
             i=0;
     }
  }
</script>