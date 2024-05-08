<?php

require("models/Conexion.php");
$con = new Conexion();

$datos = $con->getUsers();

require("views/usuarios.php");
