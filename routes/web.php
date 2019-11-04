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
    return view('home');
});
/**********  Tarea 4.1 ***********/
Route::get('contacto', function () {
    return view('tarea41/contacto');
});
Route::get('blog1/{id}', function ($id) {
    return view('tarea41/blog1', ['id'=> $id]);
});
Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('tarea41/blog2', ['id'=> $id, 'nombre' => $nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'));

// Otra posibilidad para restringir el formato de los parámetros de las rutas
Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[a-zA-Z]+');
/**********  Tarea 4.2 ***********/
Route::get('/saludo', 'SaludoController@saludo')->name('saludo');
Route::get('/saludonombre/{nombre}', 'SaludoController@saludoNombre')->name('saludoNombre');
Route::get('/saludonombrecolor/{nombre}/{color?}', 'SaludoController@saludoNombreColor')->name('saludoNombreColor');