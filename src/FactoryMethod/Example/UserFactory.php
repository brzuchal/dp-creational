<?php

namespace Creational\FactoryMethod\Example;

interface UserFactory
{
    public function createUser(): User;
}
