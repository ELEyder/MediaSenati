<?php
$user = $_SESSION['user'];
$userData = $_SESSION['data'];

if (!is_file($userData['urlAvatar'])) {
    $userData['urlAvatar'] = 'app/static/img/avatars/0.jpg';
}
require("views/main.php");
