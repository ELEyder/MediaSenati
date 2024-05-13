<?php
class Admin extends User{
    
    public function __construct($userName, $firstName, $lastName, $urlAvatar, $email, $number, $password) {
        parent::__construct($userName, $firstName, $lastName, $urlAvatar, $email, $number, $password);
    }

    public function deleteUser(){

    }

    public function setUser(){

    }

    public function deletePost(){

    }
    
    public function setPost(){

    }
    
}