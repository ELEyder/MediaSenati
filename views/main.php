<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Social</title>
    <link rel="stylesheet" href="static/css/main.css">
</head>
<body>
    <header>
        <img src="static/img/logo.svg" alt="logo" class="logo">
        <div class="info-user">
        <?php
            echo '<p class="user name">' . $name . '</p>';
            echo '<p class="user email">' . $email . '</p>';
        ?>
        </div>
        <a class="postear" href="prepararpost">Crear Post</a>
        <a class="postear" href="salir">Cerrar Sesión</a>
    </header>
    <main>
        POSTS:
        <?php
            foreach ($posts as $post) {
                echo '<div class="post">
                <div class="post-header">
                    <p class="post">' .$post['title']. '</p>
                    <p class="post">' .$post['fecha']. '</p>
                </div>
                <div class="post-main">
                    <p class="post">' .$post['description']. '</p>
                </div>
                </div>';
            }
        ?>
    </main>
</body>
</html>