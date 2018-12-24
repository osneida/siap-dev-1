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

$factory->define(App\Propietario::class, function (Faker $faker) {
    return [
        'codigo' => $faker->numerify('????###'),            
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'direccion' => $faker->city,
        'telefono1' => $faker->e164PhoneNumber,
        'telefono2' => $faker->e164PhoneNumber,
        'celular1' => $faker->e164PhoneNumber,
        'celular2' => $faker->e164PhoneNumber,
        'fecha_baja' => $faker->dateTime,             
        'estatus' => $faker->boolean        
    ];
});