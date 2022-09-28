<?php

namespace Creational\Builder\Example;

class PersonDirector
{
    public function build(PersonBuilder $builder)
    {
        $builder->gender(Gender::Male);
        $builder->employed();

        return $builder->build();
    }
}
