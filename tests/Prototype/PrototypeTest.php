<?php

namespace Creational\Tests\Prototype;

use Creational\Prototype\FemaleUserPrototype;
use Creational\Prototype\MaleUserPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testItemCreating()
    {
        $MaleUserPrototype = new MaleUserPrototype();
        $FemaleUserPrototype = new FemaleUserPrototype();

        for ($i = 0; $i < 300; $i++) {
            $item = clone $FemaleUserPrototype;
            $item->setName('Female with age of 28 number ' . $i);
            $this->assertInstanceOf(FemaleUserPrototype::class, $item);
        }

        for ($i = 0; $i < 60; $i++) {
            $item = clone $MaleUserPrototype;
            $item->setName('Bar Book No ' . $i);
            $this->assertInstanceOf(MaleUserPrototype::class, $item);
        }
    }
}
