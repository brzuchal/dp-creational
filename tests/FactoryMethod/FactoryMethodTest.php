<?php

namespace Creational\Tests\FactoryMethod;

use Creational\FactoryMethod\ConsoleLogger;
use Creational\FactoryMethod\ConsoleLoggerFactory;
use Creational\FactoryMethod\FileLogger;
use Creational\FactoryMethod\FileLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testConsoleLoggerCreation()
    {
        $loggerFactory = new ConsoleLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(ConsoleLogger::class, $logger);
    }

    public function testFileLoggerCreation()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
