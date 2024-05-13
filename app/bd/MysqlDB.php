<?php
class MysqlDB {
    
    protected $con;
    
    public function __construct() {
        try {
            $this->con = new mysqli($_ENV['HOST'] , $_ENV['ROOT'], $_ENV['PASSWORD'], $_ENV['DB']);
            echo("Conectado correctamente a la Base de datos '" . $_ENV['DB'] . "'");

        } catch (Exception $e) {
            echo("Error en la conexión");
        }
    }

    public function getUsuarios() {
        $query = $this->con->query('SELECT * FROM user');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $urlAvatar = 'app/static/img/avatars/' .$row['id']. '.jpg';
            if (!is_file($urlAvatar)) {
                $urlAvatar = 'app/static/img/avatars/0.jpg';
            }
            $row['urlAvatar'] = $urlAvatar;
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;
    }

    public function getUsuario($name, $password) {
        $query = $this->con->query('SELECT * FROM user WHERE name LIKE "' . $name .'" AND password LIKE "'. $password . '"');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;
    }

    public function setUsuario($name, $email, $password) {
        try {
            $this->con->query('INSERT INTO `user` (`name`, `email`, `password`) VALUES ( "'.$name.'", "'.$email.'", "'.$password.'");');
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function upUsuario($id, $name, $email, $password) {
        try {
            $this->con->query('UPDATE `user` SET name = "'.$name.'", email = "'.$email.'", password = "'.$password.'" WHERE id LIKE "'. $id. '";');
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function getPosts() {
        $query = $this->con->query('SELECT * FROM post');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;
    }

    public function setPost($title, $description, $fecha) {
        $query = $this->con->query('INSERT INTO `post` (`title`, `description`, `fecha`) VALUES ("'.$title.'", "'.$description.'", "'.$fecha.'");');
    }

    
}