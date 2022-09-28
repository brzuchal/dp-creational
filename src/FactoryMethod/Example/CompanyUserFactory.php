<?php

namespace Creational\FactoryMethod\Example;

class CompanyUserFactory implements UserFactory
{
    private $name;
    private $tin;

    public function __construct(string $name, int $tin)
    {
        $this->name = $name;
        $this->tin = $tin;
    }


    public function createUser(): User
    {
        return new CompanyUser($this->name, $this->tin);
    }
}
