<?php
class Post extends Conexion {
    public function __construct() {
        parent::__construct();
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