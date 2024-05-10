<?php

$con = new Post();
$posts = $con->getPosts();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];

$urlAvatar = 'app/static/img/avatars/' .$id. '.jpg';
if (!is_file($urlAvatar)) {
    $urlAvatar = 'app/static/img/avatars/0.jpg';
}
require("views/main.php");
