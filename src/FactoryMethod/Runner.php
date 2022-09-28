<?php

namespace Creational\FactoryMethod;

class Runner
{
    private const FILE_NAME = 'test.txt';

    public static function run()
    {
        $loggerFactory = new ConsoleLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $logger->log('message');


        $fileLoggerFactory = new FileLoggerFactory(sys_get_temp_dir() . '/' . self::FILE_NAME);
        $fileLogger = $fileLoggerFactory->createLogger();

        $fileLogger->log('message');
    }
}
