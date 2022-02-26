<?php
include_once 'newsMapper.php';

if (isset($_GET['id'])) {
    $newsId = $_GET['id'];
    $mapper = new NewsMapper();
    $mapper->deleteNews($newsId);
    header("Location:../views/news.php");
}
