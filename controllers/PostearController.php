<?php
$con = new Post();
session_start();
$con->setPost($_SESSION["name"], $_POST["description"], "17/05/2024");
header('Location: main');