<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//------------------------------------------------------------
Route::resource('/usuarios','UserController');
Route::get('/listar-usuarios','UserController@listarUsuario');
Route::post('/enviar-email','UserController@enviar');

//------------------------------------------------------------
Route::get('/contactanos','ContactoController@index');
Route::POST('/enviar','ContactoController@enviar_correo');

//------------------------------------------------------------
Route::resource('/servicios','ServicioController');
Route::get('/listar-servicios','ServicioController@listarServicios');
Route::get('ver-servicios','ServicioController@VerServicios');

//------------------------------------------------------------
Route::resource('/ordenes','OrdenController');
Route::get('servicios-realizados','OrdenController@realizados');
Route::get('servicios-solicitados','OrdenController@mi_orden');

Route::get('/quienes-somos', function () {
    return view('quienesSomos');
});



