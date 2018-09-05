<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use msherer\BeersGenerator\BeersGeneratorProvider;

$faker = Faker\Factory::create();
$faker->addProvider(new BeersGeneratorProvider($faker));

echo 'Name: ' . $faker->beerName() . PHP_EOL;
echo 'Type: ' . $faker->beerType() . PHP_EOL;
echo 'Malt: ' . $faker->beerMalt() . PHP_EOL;
echo 'Hop: ' . $faker->beerHop() . PHP_EOL;