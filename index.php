<?php
require_once __DIR__ . '/vendor/autoload.php';
require(__DIR__ . '/app/bd/FirestoreDB.php');
require(__DIR__ . '/app/bd/MysqlDB.php');

// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function main(){
    session_start();

    //Controlar la url
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/',$url);
    //verifica la ruta no está vacia
    if (isset($_SESSION['user'])){
        if (isset($url[0]) && $url[0] != "") {
            require("controllers/".$url[0]."Controller.php");
        } else {
            require("controllers/MainController.php");
        }
    } else {
        if (isset($url[0]) && $url[0] == "registrar"){
            require("controllers/RegistrarController.php");
        }
        require("controllers/LoginController.php");
    }
}

function mysql() {
    $con = new MysqlDB();
}

main();
// mysql();