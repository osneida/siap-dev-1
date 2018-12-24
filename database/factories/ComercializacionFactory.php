<?php

use Faker\Generator as Faker;

$factory->define(App\Comercializacion::class, function (Faker $faker) {
    return [
        'memo' => $faker->sentence(5,false),
        'user' => $faker->sentence(1,false) 
    ];
});

