<?php

namespace Creational\Builder\Example;

class Runner
{
    public static function run()
    {


        $director = new PersonDirector();
        $employedMaleBuilder = new CustomPersonBuilder();
        $unemployedMaleBuilder = new UnemployedMaleBuilder();
        $employedFemaleBuilder = new EmployedFemaleBuilder();
        $unemployedFemaleBuilder = new UnemployedFemaleBuilder();


        $employedMale = $director->build($employedMaleBuilder);

        $unemployedMale = $director->build($unemployedMaleBuilder);

        $employedFemale = $director->build($employedFemaleBuilder);

        $unemployedFemale = $director->build($unemployedFemaleBuilder);

        var_dump($unemployedFemale);
    }
}
