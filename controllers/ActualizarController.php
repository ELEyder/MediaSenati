<?php
$con = new Usuario();
$rpta = $con->upUsuario($_SESSION["id"], $_POST["name"], $_POST["email"], $_POST["password"]);
$id = $_SESSION['id'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
if ($rpta) {
    header('Location: main');
}