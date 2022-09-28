<?php

namespace Creational\Prototype\Example;

class VatItemPrototype extends ItemPrototype
{
    protected $category = 'Vat';

    public function __clone()
    {
    }

}
