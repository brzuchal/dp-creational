<?php

namespace Creational\Tests\FactoryMethod\Example;

use Creational\FactoryMethod\Example\CompanyUser;
use Creational\FactoryMethod\Example\CompanyUserFactory;
use Creational\FactoryMethod\Example\PrivateUser;
use Creational\FactoryMethod\Example\PrivateUserFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $userFactory = new PrivateUserFactory('Jan', 'Nowak');
        $user = $userFactory->createUser();

        $this->assertInstanceOf(PrivateUser::class, $user);
    }

    public function testCanCreateFileLogging()
    {
        $userFactory = new CompanyUserFactory('Intel', 5789393041);
        $user = $userFactory->createUser();

        $this->assertInstanceOf(CompanyUser::class, $user);
    }
}
