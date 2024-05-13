<?php
$con = new Post();
$posts = $con->getPosts();
$con = new Usuario();
$usuarios = $con->getUsuarios();

$id = $_SESSION['id'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];

$urlAvatar = 'app/static/img/avatars/' .$id. '.jpg';

if (!is_file($urlAvatar)) {
    $urlAvatar = 'app/static/img/avatars/0.jpg';
}
require("views/main.php");
