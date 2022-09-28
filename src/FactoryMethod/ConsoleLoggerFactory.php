<?php

namespace Creational\FactoryMethod;

class ConsoleLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new ConsoleLogger();
    }
}
