<?php
require("models/Post.php");
$con = new Post();
$posts = $con->getPosts();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
require("views/main.php");
