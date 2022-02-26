<?php
    session_start();
    include_once '../components/news.php';
    require_once '../components/newsMapper.php';
    $mapper = new NewsMapper();
    $news = $mapper->getAllNews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tickets</title>
    <link rel="stylesheet" href="../style/news.css">
</head>
    <?php
        include("../reusableCode/header.php");
    ?>
    <div class="main">
        <div class="first-main">
            <p>
                Këtu mund të gjeni katalogët e fundit të Oriflame.<br>
                Eksploroni që të shihni produktet më të reja si dhe zbritjet për cdo sezonë!<br>
            </p>
            <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
            ?>
                    <a href="insertNews.php">Insert a New</a>
            <?php 
                    }
            ?>
        </div>
        <div class="second-main">
            <?php
                foreach ($news as $new){
            ?>
            <ul class="inn-list">
                <li><img src="<?php echo $new['img_path'];?>"></li><br>
                <li><?php echo $new['name'];?></li><br>
                <li><a href="<?php echo $new['pfd_path'];?>" target="blank">VIEW</a></li><br>
                <?php 
                    if(isset($_SESSION['role']) && $_SESSION['role'] == '1'){
                ?>
                <li><a id="del-link" href=<?php echo "../components/deleteNews.php?id=" . $new['id'];?>>Delete</a></li><br><br>
                <?php
                }
                ?>
            </ul>
            <?php
                }
            ?>
        </div>
    </div>

</body>
</html>