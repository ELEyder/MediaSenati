<?php
$con = new Usuario();

$datos = $con->getUsuarios();

require("views/usuarios.php");
