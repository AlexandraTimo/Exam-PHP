<?php
require_once'../app/database.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
mysqli_query($link,"INSERT INTO `products` (`id`,`title`,`price`,`description`) VALUES (NULL,'$title','$price','$description') ");





?>
