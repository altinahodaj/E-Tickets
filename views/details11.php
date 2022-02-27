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
    <link rel="stylesheet" href="../style/details.css" type="text/css">
    
 </head>
 <body>
 	<?php 
        include('../reusableCode/header.php');
    ?>

	<div class='container'>

        <?php
                include_once '../components/MovieDetailsMapper.php';
            
                $mapper=new MovieDetailsMapper();

                $movie=$mapper->getMovieById('11');
                foreach($movie as $movies){
                ?>
        <div class='imageContainer'>
                 <?php
                        if(isset($_POST['buyT'])){

                   
                            echo   '<img class="fotoja1" src="../media/WrathOfMan.png">';  
                        }
                        else{                
                            echo "<img  class='fotoja1' src='{$movies['fotosource']}'>";
                        }
                                        
					?>
            
          
        </div>


		<div class='textContainer'>
            <p>Movie Name</p>
                <p>
                    <?php echo $movies['Emri'];?>
                </p>
            <br/>
            <p>Cmimi</p>
                 <p>
                    <?php echo $movies['Cmimi'];?>
                </p>
            <br/>

            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                ?>
                <form method="POST">
                    <input class='butoni' type="submit" value="Buy Ticket" name="buyT">      
                </form>          
            <?php
            }
            ?>

            <br/>
            <br/>
            <p id='t1'>The moment you buy the ticket a QR code will be generated</p>
         </div>

	</div>

    <div class='container'>

<div class='b1Container'>
          <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                ?>
                <input class='butoni' type="submit" value="Add to Favourites">
            <?php
            }
            ?>
    <p id='t2'>Watch trailer</p>
</div>

<div class='image2Container'>

<iframe  class='fotoja2' allowfullscreen src='<?php echo $movies['videolink'];?>'>


<ifram</iframe>
    
 </div>

</div>

<div class='container3'>
<h4>Movie Synposis:</h4>
<br>
                <h5>
                    <?php echo $movies['Pershkrimi'];?>
                </h5>

</div>

<?php
    }
?>

 </body>
 <footer>
 <?php 
        include('../reusableCode/footer.php');
    ?>
 </footer>
 </html>