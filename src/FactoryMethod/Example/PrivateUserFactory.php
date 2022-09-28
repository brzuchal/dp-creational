<?php

namespace Creational\FactoryMethod\Example;

class PrivateUserFactory implements UserFactory
{
    private $name;
    private $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }


    public function createUser(): User
    {
        return new PrivateUser($this->name, $this->surname);
    }
}
