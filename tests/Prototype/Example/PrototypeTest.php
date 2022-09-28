<?php

namespace Creational\Tests\Prototype\Example;

use Creational\Prototype\Example\VatItemPrototype;
use Creational\Prototype\Example\FreeItemPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testItemCreating()
    {
        $FreeItemPrototype = new FreeItemPrototype();
        $VatItemPrototype = new VatItemPrototype();

        for ($i = 0; $i < 300; $i++) {
            $item = clone $VatItemPrototype;
            $item->setName('Vat Item No ' . $i);
            $this->assertInstanceOf(VatItemPrototype::class, $item);
        }

        for ($i = 0; $i < 60; $i++) {
            $item = clone $FreeItemPrototype;
            $item->setName('Free item No ' . $i);
            $this->assertInstanceOf(FreeItemPrototype::class, $item);
        }
    }
}
