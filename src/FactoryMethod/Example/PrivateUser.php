<?php

namespace Creational\FactoryMethod\Example;

class PrivateUser implements User
{

    private $name;
    private $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function describe(): void
    {
        echo ' name: '.$this->name.' tin: '.$this->surname;
    }
}
