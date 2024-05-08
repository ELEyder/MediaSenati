<?php
require("models/Conexion.php");
$con = new Conexion();
session_start();
$con->setPost($_SESSION["name"], $_POST["description"], "17/05/2024");
header('Location: main');