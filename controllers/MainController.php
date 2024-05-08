<?php
session_start();
require("models/Conexion.php");
$con = new Conexion();
$posts = $con->getPosts();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
require("views/main.php");
