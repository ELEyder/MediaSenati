<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Social</title>
</head>
<body>
    <header>
        <img src="static/img/logo.jpg" alt="logo" height="200px">
    </header>
    <?php
        foreach ($datos as $user) {
            echo '<p>' . $user['username'] . '</p>';
        }
    ?>
</body>
</html>