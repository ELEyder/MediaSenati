<?php
$con = new Usuario();

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

require("views/configurar.php");
