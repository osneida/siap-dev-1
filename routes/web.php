<?php

use App\Mail\Welcome as WelcomeEmail;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

/*Route::get('/', function () {
    return 'Home';
});*/

Route::get('/', 'PagesController@inicio');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/test/datepicker', function () {
    return view('datepicker');
});

/* Estaciones de Servicio */
/* Estaciones de Servicio */
Route::get('/estaciones', 'EstacionController@index')->name('estaciones.index');
Route::get('/estaciones/{estacion}', 'EstacionController@show')->where('estacion','\d+')->name('estaciones.show');
//Route::get('/estaciones/nuevo', 'EstacionController@create')->name('estaciones.create');
Route::get('/registro', 'EstacionController@create')->name('estaciones.create');
Route::get('/estaciones/{estacion}/editar', 'EstacionController@edit')->name('estaciones.edit');
Route::put('/estaciones/{estacion}', 'EstacionController@update');
Route::post('/estaciones', 'EstacionController@store');
Route::delete('/estaciones/{estacion}', 'EstacionController@destroy')->name('estaciones.destroy');

/* Plantilla de Correos de Comercialización a Clientes */
Route::get('/plantillacorreos', 'PlantillacorreoController@index')->name('plantillacorreos.index');
Route::get('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@show')->where('plantillacorreo','\d+')->name('plantillacorreos.show');
Route::get('/plantillacorreos/nuevo', 'PlantillacorreoController@create')->name('plantillacorreos.create');
Route::get('/plantillacorreos/{plantillacorreo}/editar', 'PlantillacorreoController@edit')->name('plantillacorreos.edit');
Route::put('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@update');
Route::post('/plantillacorreos', 'PlantillacorreoController@store');
Route::delete('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@destroy')->name('plantillacorreos.destroy');

/* Listado de Clientes (Propietarios) */
Route::get('/propietarios', 'PropietarioController@index')->name('propietarios.index');
Route::get('/propietarios/{propietario}', 'PropietarioController@show')->where('propietario','\d+')->name('propietarios.show');
Route::get('/propietarios/nuevo', 'PropietarioController@create')->name('propietarios.create');
Route::get('/propietarios/{propietario}/editar', 'PropietarioController@edit')->name('propietarios.edit');
Route::put('/propietarios/{propietario}', 'PropietarioController@update');
Route::post('/propietarios', 'PropietarioController@store');
Route::delete('/propietarios/{propietario}', 'PropietarioController@destroy')->name('propietarios.destroy');

/**************************************************************************************************/
/* Listado de Clientes (Responsables) */
Route::get('/responsables', 'ResponsableController@index')->name('responsables.index');
Route::get('/responsables/{responsable}', 'ResponsableController@show')->where('responsable','\d+')->name('responsables.show');
Route::get('/responsables/nuevo', 'ResponsableController@create')->name('responsables.create');
Route::get('/responsables/{responsable}/editar', 'ResponsableController@edit')->name('responsables.edit');
Route::put('/responsables/{responsable}', 'ResponsableController@update');
Route::post('/responsables', 'ResponsableController@store');
Route::delete('/responsables/{responsable}', 'ResponsableController@destroy')->name('responsables.destroy');
Route::get('/responsables/{responsable}/enviarcorreos', 'ResponsableController@sendmail')->name('responsables.sendmail');

Route::get('welcome',function(){
    $user = new \App\User([
        'name' => 'Jenner Vergara',
        'email' => 'jenner@example.com',        
    ]);
    Mail::to($user->email, $user->name)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            ->send(new WelcomeEmail($user));
});

/**************************************************************************************************/
/* Listado de Usuarios */
Route::get('/usuarios', 'UsuarioController@index')->name('usuarios.index');
Route::get('/usuarios/{usuario}', 'UsuarioController@show')->where('usuarios','\d+')
        ->name('usuarios.show');
Route::get('/usuarios/nuevo', 'UsuarioController@create')->name('usuarios.create');
Route::get('/usuarios/{usuario}/editar', 'UsuarioController@edit')->name('usuarios.edit');
Route::put('/usuarios/{usuario}', 'UsuarioController@update');
Route::post('/usuarios', 'UsuarioController@store');
Route::delete('/usuarios/{usuario}', 'UsuarioController@destroy')->name('usuarios.destroy');

/**************************************************************************************************/
/* Listado de Perfiles */
Route::get('/perfiles', 'PerfilController@index')->name('perfiles.index');
Route::get('/perfiles/{perfil}', 'PerfilController@show')->where('perfiles','\d+')->name('perfiles.show');
Route::get('/perfiles/nuevo', 'PerfilController@create')->name('perfiles.create');
Route::get('/perfiles/{perfil}/editar', 'PerfilController@edit')->name('perfiles.edit');
Route::put('/perfiles/{perfil}', 'PerfilController@update');
Route::post('/perfiles', 'PerfilController@store');
Route::delete('/perfiles/{perfil}', 'PerfilController@destroy')->name('perfiles.destroy');

/**************************************************************************************************/
/* Listado de Roles */
Route::get('/roles', 'RolController@index')->name('roles.index');
Route::get('/roles/{rol}', 'RolController@show')->where('roles','\d+')->name('roles.show');
Route::get('/roles/nuevo', 'RolController@create')->name('roles.create');
Route::get('/roles/{rol}/editar', 'RolController@edit')->name('roles.edit');
Route::put('/roles/{rol}', 'RolController@update');
Route::post('/roles', 'RolController@store');
Route::delete('/roles/{rol}', 'RolController@destroy')->name('roles.destroy');

/**************************************************************************************************/
/* Listado de Tipos de Obligaciones */
Route::get('/tipoobligaciones', 'TipoobligacionesController@index')->name('tipoobligaciones.index');
Route::get('/tipoobligaciones/{tipoobligacion}', 'TipoobligacionesController@show')->where('tipoobligaciones','\d+')->name('tipoobligaciones.show');
Route::get('/tipoobligaciones/nuevo', 'TipoobligacionesController@create')->name('tipoobligaciones.create');
Route::get('/tipoobligaciones/{tipoobligacion}/editar', 'TipoobligacionesController@edit')->name('tipoobligaciones.edit');
Route::put('/tipoobligaciones/{tipoobligacion}', 'TipoobligacionesController@update');
Route::post('/tipoobligaciones', 'TipoobligacionesController@store');
Route::delete('/tipoobligaciones/{tipoobligacion}', 'TipoobligacionesController@destroy')->name('tipoobligaciones.destroy');

Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);        
Route::get('oblig-estacion',['uses'=>'ObligacionController@manageCategory']);
Route::post('add-obligacion',['as'=>'add.category','uses'=>'ObligacionController@addCategory']);
Route::get('/listadoobligaciones', 'ObligacionController@index')->name('obligaciones.index');
Route::get('/obligaciones/nuevo', 'ObligacionController@create')->name('obligaciones.create');


Route::post('/test/save', ['as' => 'save-date',
                           'uses' => 'DateController@showDate', 
                            function () {
                                return '';
                            }]);


/**************************************************************************************************/
/* Edgar Teran */
/*Listado de medidas de control*/
Route::get('/medidas', 'MedidaController@index')->name('medidas.index');
Route::get('/medidas/{medida}', 'MedidaController@show')->where('medida','\d+')->name('medidas.show');
Route::get('/medidas/nuevo', 'MedidaController@create')->name('medidas.create');
Route::get('/medidas/{medida}/editar', 'MedidaController@edit')->name('medidas.edit');
Route::put('/medidas/{medida}', 'MedidaController@update');
Route::post('/medidas', 'MedidaController@store');
Route::delete('/medidas/{medida}', 'MedidaController@destroy')->name('medidas.destroy');
/*Listado de sistemas de prevencion */
Route::get('/sistemas', 'SistemaController@index')->name('sistemas.index');
Route::get('/sistemas/{sistema}', 'SistemaController@show')->where('sistema','\d+')->name('sistemas.show');
Route::get('/sistemas/nuevo', 'SistemaController@create')->name('sistemas.create');
Route::get('/sistemas/{sistema}/editar', 'SistemaController@edit')->name('sistemas.edit');
Route::put('/sistemas/{sistema}', 'SistemaController@update');
Route::post('/sistemas', 'SistemaController@store');
Route::delete('/sistemas/{sistema}', 'SistemaController@destroy')->name('sistemas.destroy');
/* Listado de Agentes de riesgo */
Route::get('/agentes', 'AgenteController@index')->name('agentes.index');
Route::get('/agentes/{agente}', 'AgenteController@show')->where('agente','\d+')->name('agentes.show');
Route::get('/agentes/nuevo', 'AgenteController@create')->name('agentes.create');
Route::get('/agentes/{agente}/editar', 'AgenteController@edit')->name('agentes.edit');
Route::put('/agentes/{agente}', 'AgenteController@update');
Route::post('/agentes', 'AgenteController@store');
Route::delete('/agentes/{agente}', 'AgenteController@destroy')->name('agentes.destroy');
/* Listado de Efectos probables sobre la salud */
Route::get('/efectos', 'EfectoController@index')->name('efectos.index');
Route::get('/efectos/{efecto}', 'EfectoController@show')->where('efecto','\d+')->name('efectos.show');
Route::get('/efectos/nuevo', 'EfectoController@create')->name('efectos.create');
Route::get('/efectos/{efecto}/editar', 'EfectoController@edit')->name('efectos.edit');
Route::put('/efectos/{efecto}', 'EfectoController@update');
Route::post('/efectos', 'EfectoController@store');
Route::delete('/efectos/{efecto}', 'EfectoController@destroy')->name('efectos.destroy');
/* Listado de Tipo_riesgo */
Route::get('/tiporiesgos', 'TipoRiesgoController@index')->name('tiporiesgos.index');
Route::get('/tiporiesgos/{tiporiesgo}', 'TipoRiesgoController@show')->where('tiporiesgo','\d+')->name('tiporiesgos.show');
Route::get('/tiporiesgos/nuevo', 'TipoRiesgoController@create')->name('tiporiesgos.create');
Route::get('/tiporiesgos/{tiporiesgo}/editar', 'TipoRiesgoController@edit')->name('tiporiesgos.edit');
Route::put('/tiporiesgos/{tiporiesgo}', 'TipoRiesgoController@update');
Route::post('/tiporiesgos', 'TipoRiesgoController@store');
Route::delete('/tiporiesgos/{tiporiesgo}', 'TipoRiesgoController@destroy')->name('tiporiesgos.destroy');
/* Listado de Riesgos */
Route::get('/riesgos', 'RiesgoController@index')->name('riesgos.index');
Route::get('/riesgos/{riesgo}', 'RiesgoController@show')->where('riesgo','\d+')->name('riesgos.show');
Route::get('/riegos/nuevo', 'RiesgoController@create')->name('riesgos.create');
Route::get('/riesgos/{riesgo}/editar', 'RiesgoController@edit')->name('riesgos.edit');
Route::put('/riesgos/{riesgo}', 'RiesgoController@update');
Route::post('/riesgos', 'RiesgoController@store');
Route::delete('/riesgos/{riesgo}', 'RiesgoController@destroy')->name('riesgos.destroy');


/**************************************************************************************************/
/* Osneida Bordones */
/* Rutas Politica */
Route::post('/politicas', 'PoliticaController@store')->name('politicas.store');
Route::get('/politicas', 'PoliticaController@index')->name('politicas.index');
Route::get('/politicas/nuevo', 'PoliticaController@create')->name('politicas.create');
Route::put('/politicas/{politica}', 'PoliticaController@update')->name('politicas.update');
Route::get('/politicas/{politica}', 'PoliticaController@show')->where('politica','\d+')->name('politicas.show');
Route::delete('/politicas/{politica}', 'PoliticaController@destroy')->name('politicas.destroy');
Route::get('/politicas/{politica}/edit', 'PoliticaController@edit')->name('politicas.edit');

//Minutas
Route::post('/minutas', 'MinutaController@store')->name('minutas.store');
Route::get('/minutas', 'MinutaController@index')->name('minutas.index');
Route::get('/minutas/create', 'MinutaController@create')->name('minutas.create');
Route::put('/minutas/{minuta}', 'MinutaController@update')->name('minutas.update');
Route::get('/minutas/{minuta}', 'MinutaController@show')->where('minuta','\d+')->name('minutas.show');
Route::delete('/minutas/{minuta}', 'MinutaController@destroy')->name('minutas.destroy');
Route::get('/minutas/{minuta}/edit', 'MinutaController@edit')->name('minutas.edit');

//Comunicacion
Route::post('/comunicaciones', 'ComunicacionController@store')->name('comunicaciones.store');
Route::get('/comunicaciones', 'ComunicacionController@index')->name('comunicaciones.index');
Route::get('/comunicaciones/create', 'ComunicacionController@create')->name('comunicaciones.create');
Route::put('/comunicaciones/{comunicacion}', 'ComunicacionController@update')->name('comunicaciones.update');
Route::get('/comunicaciones/{comunicacion}', 'ComunicacionController@show')->where('comunicaciones','\d+')->name('comunicacions.show');
Route::delete('/comunicaciones/{comunicacion}', 'ComunicacionController@destroy')->name('comunicaciones.destroy');
Route::get('/comunicaciones/{comunicacion}/edit', 'ComunicacionController@edit')->name('comunicaciones.edit');


/**************************************************************************************************/
/* Pedro Nieves */
/* Rutas Personal */
Route::resource('personal_com', 'Personal_con\\Personal_comController');
Route::get('/personal_com/pdf','Personal_con\\Personal_comController@getIndex');
Route::get('/personal_com/pdf/generar','Personal_con\\Personal_comController@getGenerar');
//++++++++++++++++++++Programa de capacitacion++++++++++++++++++
Route::get('pdfprograma','Personal\pdfprogramaController@getIndex');
Route::get('pdfprograma/generar','Personal\pdfprogramaController@getGenerar');
//+++++++++++++++++++++++++++programa de capacitacion++++++++++++++++++++++++++++++++++++++++
Route::resource('programa_de_capacitaciones', 'Capacitacion\\Programa_de_capacitacionesController');
Route::resource('programa_de_capacitaciones_l', 'Capacitacion\\Programa_de_capacitaciones_lController');
//
Route::resource('personal', 'Personal\PersonalController');
Route::resource('proceso_de_induccion', 'Personal\\Proceso_de_induccionController');

//+++++++++++++++++++++++++++descripcion del puesto+++++++++++++++++++++++++++++++++++++++
Route::resource('descripcion_puesto', 'Personal\\Descripcion_puestoController');
Route::get('/descripcion_puesto/pdf','Personal\\Descripcion_puestoController@getIndex');
Route::get('/descripcion_puesto/pdf/generar','Personal\\Descripcion_puestoController@getGenerar');


Route::resource('proceso_induccion', 'Personal\\proceso_induccionController');
Route::get('/proceso_induccion/pdf','Personal\\proceso_induccionController@getIndex');
Route::get('/proceso_induccion/pdf/generar','Personal\\proceso_induccionController@getGenerar');


Route::resource('acta_confidencial', 'Personal\\acta_confidencialController');
Route::get('/acta_confidencial/pdf','Personal\\acta_confidencialController@getIndex');
Route::get('/acta_confidencial/pdf/generar','Personal\\acta_confidencialController@getGenerar');
Route::resource('menu', 'Menu\\menuController');
Route::resource('menut', 'Menut\\menutController');
Route::resource('head_documento', 'Head_documento\\head_documentoController');
Route::resource('aspecto_familiar', 'Personal\\aspecto_familiarController');
Route::resource('competencia', 'Competencia\\competenciaController');