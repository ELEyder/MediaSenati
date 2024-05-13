<?php
$con = new Usuario();

$rpta = $con->setUsuario( $_POST["username"], $_POST["email"], $_POST["password"]);
if (!$rpta) {
    header('Location: login');
} else {
    $datos = $con->getUsuario($_POST["username"], $_POST["password"]);
    
    if ($datos == []) {
        header('Location: login');
    } else {
        session_start();
        foreach ($datos as $user) {
            $_SESSION["id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["password"] = $user["password"];
        }
        header('Location: main');
    }
}