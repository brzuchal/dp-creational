<?php

namespace Creational\FactoryMethod\Example;


class CompanyUser implements User
{
    private $name;
    private $teamId;

    public function __construct(string $name, int $teamId)
    {
        $this->name = $name;
        $this->teamId = $teamId;
    }

    public function describe(): void
    {
        echo ' name: '.$this->name.' tin: '.$this->teamId;
    }
}
