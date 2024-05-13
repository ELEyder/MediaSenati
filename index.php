<?php
require('app/bd/Conexion.php');
require("models/Post.php");
require("models/Usuario.php");

session_start();
$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/',$url);

if (isset($_SESSION['username'])){
    if (isset($url[0]) && $url[0] != "" && $url[0] != "login" && $url[0] != "entrar" && $url[0] != "registrar" && $url[0] != "postear") {
        require("controllers/".$url[0]."Controller.php");
    } else {
        require("controllers/MainController.php");
    }
} else {
    if (isset($url[0]) && $url[0] == "registrar" || $url[0] == "entrar"){
        require("controllers/".$url[0]."Controller.php");
    } else {
        require("controllers/LoginController.php");
    }
}