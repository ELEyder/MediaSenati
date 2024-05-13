<?php
class DefaultUser extends User{
    private string $country;
    private string $address;
    private array $friends;

    public function __construct($userName, $firstName, $lastName, $urlAvatar, $email, $number, $password, $lastAccess, $state, $country, $address, $friends) {
        parent::__construct($userName, $firstName, $lastName, $urlAvatar, $email, $number, $password, $lastAccess, $state);
        $this->country = $country == null ? "" : $country;
        $this->address = $address == null ? "" : $address;
        $this->friends = $friends == null ? "" : $friends;
    }    
    
    public function getData() {
        $dataUser = [
            "userName" => $this->getUserName(),
            "firstName" => $this->getFirstName(),
            "lastName" => $this->getLastName(),
            "urlAvatar" => $this->getUrlAvatar(),
            "number" => $this->getNumber(),
            "password" => $this->getPassword(),
            "lastAccess" => $this->getLastAccess(),
            "state" => $this->getState(),
            "country" => $this->getCountry(),
            "address" => $this->getAddress(),
            "friends" => $this->getFriends(),
        ];
        return $dataUser;
    }

    // Getters
    public function getCountry(): string {
        return $this->country;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getFriends(): array {
        return $this->friends;
    }

    // Setters
    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    public function setFriends(array $friends): void {
        $this->friends = $friends;
    }
}