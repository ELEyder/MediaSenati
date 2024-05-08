<?php
session_start();
$name = $_SESSION['name'];
require("views/prepararpost.php");
