<?php
    session_start();
    include_once '../components/product.php';
    require_once '../components/productMapper.php';
    include_once '../components/article.php';
    require_once '../components/articleMapper.php';
    $mapper = new ArticleMapper();
    $mapper2 = new ProductMapper();
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tickets</title>
    <link rel="stylesheet"  href="../style/comedies.css">
<body>
    <?php
        include("../reusableCode/header.php");
    ?>
    <main class="Comedies">
            <div class="Comedies">
                <ul id="ul1"> 
                <li id="li1"><a href="./comedies.php">Comedy Movies</a></li>
                <li id="li1"><a href="./actions.php">Action Movies</a></li>
                <li id="li1"><a href="./thriller.php">Thriller Movies</a></li>
                <li id="li1"><a href="./animated.php">Animated Movies</a></li>
                <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                ?>
                    <li><a href="insertProduct.php"><input type="submit" id='insertProd' name='insert' value="Insert a Product"></a></li>
                <?php 
                    }
                ?>
                </ul>
            </div>
            <h4>Action Movies</h4>
                <div id="Comedies" > 
                        <?php
                        $products = $mapper2->getProductsByCategory('action');
                        foreach($products as $product){
                        ?>
                        <ul class="list">
                        <li><img src="<?php echo $product['img_path'];?>"></li><br>
                        <li><?php echo $product['name'];?></li><br>
                        <li><?php echo $product['price'];?>€</li><br>
                        <?php 
                        if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                        ?>
                        <li><a href=<?php echo "../components/deleteProduct.php?id=" . $product['id'];?>>Delete</a></li><br><br>
                        <?php
                            }
                        ?>
                         </ul>
                        <?php 
                            }
                        ?>
            </div>
    </main>
    <?php
        include("../reusableCode/footer.php");
        ?>
</body>
</html>