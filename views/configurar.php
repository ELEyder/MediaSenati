<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/static/css/configurar.css">
    <title>Configurar</title>
</head>
<body>
    <?php
    echo '<form class="configurar" action="actualizar" method="POST">
        <label for="">Avatar: </label>
        <input type="file" name="myImage" accept="image/jpeg" />
        <label for="">Nombre: </label>
        <input type="text" name="name" value="'.$name.'" required>
        <label for="">Correo: </label>
        <input type="email" name="email" value="'.$email.'" required>
        <label for="">Contraseña: </label>
        <input type="password" name="password" value="'.$password.'" required>
        <button type="submit" class="btn">Guardar</button>
    </form>'
    ?>
</body>
</html>