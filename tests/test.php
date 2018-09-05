<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use msherer\BeersGenerator\BeersGeneratorProvider;

$faker = Faker\Factory::create();
$faker->addProvider(new BeersGeneratorProvider($faker));
echo $faker->beerGenerator();