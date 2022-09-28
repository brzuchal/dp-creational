<?php

namespace Creational\Builder;

interface MealBuilder
{
    public function temperature(MealTemperature $temperature): void;

    public function vegan(): void;

    public function build(): Meal;
}
