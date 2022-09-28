<?php

 

namespace Creational\Prototype;

abstract class UserPrototype
{
    protected $name;

    protected $category;

    abstract public function __clone();

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
