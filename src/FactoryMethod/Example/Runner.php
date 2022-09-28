<?php
namespace Creational\FactoryMethod\Example;

class Runner
{
    public static function run()
    {
        $loggerFactory = new PrivateUserFactory('Jan', 'Nowak');
        $logger = $loggerFactory->createUser();

        $logger->describe();


        $fileLoggerFactory = new CompanyUserFactory('Intel', 5789238920);
        $fileLogger = $fileLoggerFactory->createUser();

        $fileLogger->describe();
    }
}
