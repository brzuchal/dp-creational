<?php

namespace Creational\Builder;

class Runner
{
    public static function run(): void
    {
        $director = new MealDirector();
        $builder = new CustomMealBuilder();
        $meal = $director->build($builder);

        var_dump($meal);
    }
}
