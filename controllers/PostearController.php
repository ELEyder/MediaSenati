<?php
$con = new Post();
$con->setPost($_SESSION["username"], $_POST["description"], "17/05/2024");
header('Location: main');