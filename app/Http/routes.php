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
	['only'=>['store','logout']] ); ///////////ruta que redirecciona segun el nivel de usuario


Route::resource('alta','altaUsuarios',['only'=>['index','store','update','delete']]);    ///ruta para el alta de usuarios 
  



Route::get('logout','SolicitudController@logout');////ruta de salida


	Route::resource('menu','alta_nfc',  /////ruta del menu
	['only'=>['index','store']]);
