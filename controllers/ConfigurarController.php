<?php
$con = new Usuario();

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];

require("views/configurar.php");
