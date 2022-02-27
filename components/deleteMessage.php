<?php
include_once 'messageMapper.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new MessageMapper();
    $mapper->deleteMessage($id);
    header("Location:../views/dashboard.php");
}
