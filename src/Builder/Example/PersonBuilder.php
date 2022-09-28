<?php

namespace Creational\Builder\Example;

interface PersonBuilder
{
    public function gender(Gender $gender): self;

    public function employed(): self;

    public function build(): Person;
}
