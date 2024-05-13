<?php
use Google\Cloud\Core\Timestamp;
abstract class User{

    protected string $userName;
    protected string $firstName;
    protected string $lastName;
    protected string $urlAvatar;
    protected string $email;
    protected string $number;
    protected string $password;
    protected Timestamp $lastAccess;
    protected string $state;

    public function __construct($userName, $firstName, $lastName, $urlAvatar = null, $email, $number = null, $password, $lastAccess = null, $state = null) {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->urlAvatar = $urlAvatar == null ? "app/static/img/avatars/1.jpg" : $urlAvatar;
        $this->email = $email;
        $this->number = $number == null ? "" : $number;
        $this->password = $password;
        $this->lastAccess = $lastAccess == null ? new Timestamp(new \DateTime()) : $lastAccess;
        $this->state = $state == null ? "Desconectado" : $state;
    }

    // Getters
    public function getUserName(): string {
        return $this->userName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getUrlAvatar(): string {
        return $this->urlAvatar;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getNumber(): string {
        return $this->number;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getLastAccess(): Timestamp {
        return $this->lastAccess;
    }

    public function getState(): string {
        return $this->state;
    }

    // Setters
    public function setUserName(string $userName): void {
        $this->userName = $userName;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setUrlAvatar(string $urlAvatar): void {
        $this->urlAvatar = $urlAvatar;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setNumber(string $number): void {
        $this->number = $number;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    public function setLastAccess(Timestamp $lastAccess): void {
        $this->lastAccess = $lastAccess;
    }

    public function setState(string $state): void {
        $this->state = $state;
    }
}