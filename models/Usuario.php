<?php
class Usuario extends Conexion {

    public function __construct() {
        parent::__construct();
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

    public function getUsuario($username, $password) {
        $query = $this->con->query('SELECT * FROM user WHERE username LIKE "' . $username .'" AND password LIKE "'. $password . '"');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;
    }

    public function setUsuario($username, $email, $password) {
        try {
            $this->con->query('INSERT INTO `user` (`username`, `email`, `password`) VALUES ( "'.$username.'", "'.$email.'", "'.$password.'");');
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function upUsuario($id, $username, $email, $password) {
        try {
            $this->con->query('UPDATE `user` SET username = "'.$username.'", email = "'.$email.'", password = "'.$password.'" WHERE id LIKE "'. $id. '";');
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }
}