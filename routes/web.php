<?php

/*Route::get('/', function () {
    return 'Home';
});*/

Route::get('/', 'PagesController@home');


Route::get('/plantillacorreos', 'PlantillacorreoController@index')
        ->name('plantillacorreos.index');

Route::get('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@show')
        ->where('plantillacorreo','\d+')
        ->name('plantillacorreos.show');

Route::get('/plantillacorreos/nuevo', 'PlantillacorreoController@create')
                ->name('plantillacorreos.create');

Route::get('/plantillacorreos/{plantillacorreo}/editar', 'PlantillacorreoController@edit')
                ->name('plantillacorreos.edit');

Route::put('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@update');

Route::post('/plantillacorreos', 'PlantillacorreoController@store');

Route::delete('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@destroy')
        ->name('plantillacorreos.destroy');


Route::get('/propietarios', 'PropietarioController@index')
        ->name('propietarios.index');

Route::get('/propietarios/{propietario}', 'PropietarioController@show')
        ->where('propietario','\d+')
        ->name('propietarios.show');

Route::get('/propietarios/nuevo', 'PropietarioController@create')
                ->name('propietarios.create');

Route::get('/propietarios/{propietario}/editar', 'PropietarioController@edit')
                ->name('propietarios.edit');

Route::put('/propietarios/{propietario}', 'PropietarioController@update');

Route::post('/propietarios', 'PropietarioController@store');

Route::delete('/propietarios/{propietario}', 'PropietarioController@destroy')
        ->name('propietarios.destroy');
