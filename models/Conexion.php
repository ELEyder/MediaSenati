<?php
class Conexion {
    
    private $con;
    
    public function __construct() {
        $this->con = new mysqli("localhost:3307" , "root", "", "redsocial");
    }

    public function getUsers() {
        $query = $this->con->query('SELECT * FROM user');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;
    }
    public function getUser($name, $password) {
        $query = $this->con->query('SELECT * FROM user WHERE name LIKE "' . $name .'" AND password LIKE "'. $password . '"');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $retorno[$i] = $row;
            $i++;
        }
        return $retorno;

    }

    public function setUser($name, $email, $password) {
        try {
            $this->con->query('INSERT INTO `user` (`name`, `email`, `password`) VALUES ( "'.$name.'", "'.$email.'", "'.$password.'");');
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
?>