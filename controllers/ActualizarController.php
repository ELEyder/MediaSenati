<?php
$con = new Usuario();
$rpta = $con->upUsuario($_SESSION["id"], $_POST["name"], $_POST["email"], $_POST["password"]);

$id = $_SESSION['id'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

if (isset($_FILES['avatar'])){
    $avatar = $_FILES['avatar'];

    if($avatar['error'] === UPLOAD_ERR_OK){
        $carpeta_destino = 'app/static/img/avatars/';
        $nuevo_nombre = $id . '.jpg';
        
        // Mover el archivo a la carpeta de destino con el nuevo nombre
        $ruta_guardado = $carpeta_destino . $nuevo_nombre;
        move_uploaded_file($avatar['tmp_name'], $ruta_guardado);
    }
}

if ($rpta) {
    header('Location: main');
}