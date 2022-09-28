<?php

namespace Creational\FactoryMethod;

class ConsoleLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message;
    }

}
