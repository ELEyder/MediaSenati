<?php
require('app/bd/Conexion.php');

class Usuario extends Conexion {

    public function __construct() {
        parent::__construct();
    }
    public function getUsuarios() {
        $query = $this->con->query('SELECT * FROM user');
        $retorno = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
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
}