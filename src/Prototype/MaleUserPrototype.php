<?php

namespace Creational\Prototype;

class MaleUserPrototype extends UserPrototype
{
    protected $gender = 'Male';
    protected $age = 23;

    public function __clone()
    {
    }

}
