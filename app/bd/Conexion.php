<?php
class Conexion {
    
    protected $con;
    
    public function __construct() {
        $this->con = new mysqli("localhost:3306" , "root", "", "mediasenati");
    }

}