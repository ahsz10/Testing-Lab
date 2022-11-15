<?php

class User{
    public string $name;
    public string $email;
    
    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }
}

?>