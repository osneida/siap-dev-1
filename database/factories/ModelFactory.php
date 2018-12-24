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

$factory->define(App\Menu::class, function (Faker $faker) {
    $name = $faker->name;
    $menus = App\Menu::all();
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'parent' => (count($menus) > 0) ? $faker->randomElement($menus->pluck('id')->toArray()) : 0,
        'menuorder' => 0
    ];
});
