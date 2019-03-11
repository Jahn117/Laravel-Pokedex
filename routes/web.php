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

//EJERCICIO VIDEO 8 -- INICIO -- 
Route::get('/mi_primer_ruta', function() {
	return 'Hello World, esta es mi primer ruta';
});

Route::get('/name/{name}/apellido/{apellido?}', function($name,$apellido=null){
	return 'Hola soy '.$name. ' ' .$apellido;
});

//-- FIN --

