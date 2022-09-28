<?php

namespace Creational\Builder;

class MealDirector
{
    public function build(MealBuilder $builder): Meal
    {
        $builder->temperature(temperature: MealTemperature::Hot);
        $builder->vegan();

        return $builder->build();
    }
}
