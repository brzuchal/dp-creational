<?php

namespace Creational\Prototype\Example;

abstract class ItemPrototype
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
