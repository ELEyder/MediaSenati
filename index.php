<?php
require('app/bd/Conexion.php');
require("models/Post.php");
require("models/Usuario.php");

session_start();
$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/',$url);
if (isset($url[0]) && $url[0] != "") {
    if (!isset($_SESSION['email']) && $url[0] != "entrar"){
        require("controllers/LoginController.php");
    } else {
        require("controllers/".$url[0]."Controller.php");
    }
}
else {
    require("controllers/LoginController.php");
}