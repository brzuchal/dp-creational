<?php

 

namespace Creational\Builder\Example;

class CustomPersonBuilder implements PersonBuilder
{
    private bool $employed = false;
    private Gender $gender = Gender::Undisclosed;

    public function gender(Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function employed(): self
    {
        $this->employed = true;

        return $this;
    }

    public function build(): Person
    {
        return new Person(
            employed: $this->employed,
            gender: $this->gender,
        );
    }
}
