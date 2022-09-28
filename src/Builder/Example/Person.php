<?php

namespace Creational\Builder\Example;

class Person
{
    public function __construct(
        public bool $employed,
        public Gender $gender,
    ) {
    }
}
