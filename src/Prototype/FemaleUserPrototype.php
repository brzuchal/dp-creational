<?php

namespace Creational\Prototype;

class FemaleUserPrototype extends UserPrototype
{
    protected $gender = 'Female';
    protected $age = 28;

    public function __clone()
    {
    }
}
