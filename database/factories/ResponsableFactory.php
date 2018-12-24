<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Responsable::class, function (Faker $faker) {
    return [
        'codigo' => $faker->numerify('????###'),            
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'estacion' => $faker->numerify('Estación ###'),
        'fecha_baja' => $faker->dateTime,
        'fecha_primer_envio_correo' => $faker->dateTime,
        'fecha_ultimo_envio_correo' => $faker->dateTime,        
        'estatus' => $faker->boolean        
    ];
    
});