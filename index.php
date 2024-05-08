<?php
$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/',$url);
if (isset($url[0]) && $url[0] != "") {
    require("controllers/".$url[0]."Controller.php");
}
else {
    require("controllers/LoginController.php");
}
?>