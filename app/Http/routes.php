<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login.login');
});

Route::resource('empleado','SolicitudController',
	['only'=>['store']] ); ///////////ruta que redirecciona segun el nivel de usuario
  Route::get('logout','SolicitudController@logout');////ruta de salida


Route::resource('alta','altaUsuarios',['only'=>['index','store','update','delete']]);    //// control de calidad
///ruta para el alta de usuarios(control de calidad)


	Route::resource('menu','alta_nfc',  /////ruta del menu
	['only'=>['index','store']]);

  Route::resource('usuario','EmpleadoController',['only'=>['index','store','update','delete']]);///empleado normalito

  Route::resource('gerentearea','GefedeptoController',['only'=>['index','store','update','delete']]);///jefe del area

  Route::resource('gerentedepto','GerenteareaController',['only'=>['index','store','update','delete']]);///jefe de depto
