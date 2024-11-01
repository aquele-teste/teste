<?php

class User
{
     public function __construct(private string $name, private string $email)
     {
     }

    public function createUser(): true
    {
        echo "User created with name: $this->name and email: $this->email";

        return true;
    }
}