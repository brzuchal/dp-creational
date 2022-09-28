<?php

namespace Creational\Builder;

class Meal
{
    public function __construct(
        public readonly bool $isVegan,
        public readonly MealTemperature $temperature,
    ) {
    }
}
