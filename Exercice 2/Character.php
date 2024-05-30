<?php

class Character {
    
    private int $id;
    private string $firstName = "John";
    private string $lastName = "Doe";
    
    public function __construct($id) {
        $this->id = $id;
    }
    
    public function getId() : int 
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function getFirstName() : string 
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    public function getLastName() : string 
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    public function getFullName(string $firstName, string $lastName) : string 
    {
        return "{$this->firstName} {$this->lastName}";
    }
    
}

?>