<?php

namespace Creational\Builder;

class CustomMealBuilder implements MealBuilder
{
    protected MealTemperature|null $temperature = null;
    protected bool $isVegan = false;

    public function __construct(
        protected MealTemperature $defaultTemperature = MealTemperature::Cold,
    ) {
    }

    public function temperature(MealTemperature $temperature): void
    {
        $this->temperature = $temperature;
    }

    public function vegan(): void
    {
        $this->isVegan = true;
    }

    public function build(): Meal
    {
        return new Meal(
            isVegan: $this->isVegan,
            temperature: $this->temperature ?? $this->defaultTemperature,
        );
    }
}
