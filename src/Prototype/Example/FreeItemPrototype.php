<?php

namespace Creational\Prototype\Example;

class FreeItemPrototype extends ItemPrototype
{
    protected $category = 'Free';

    public function __clone()
    {
    }

}
