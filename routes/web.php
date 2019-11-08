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

// Letras a/Z 
Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[a-zA-Z]+');

/**********  Tarea 4.2 ***********/
Route::get('/saludo', 'SaludoController@saludo')->name('saludo');
Route::get('/saludonombre/{nombre}', 'SaludoController@saludoNombre')->name('saludoNombre');
Route::get('/saludonombrecolor/{nombre}/{color?}', 'SaludoController@saludoNombreColor')->name('saludoNombreColor');

//*********  Tarea 4.3 ***********/
Route::get('/form1', 'SaludoController@createForm1Contacto')->name('createForm1');
Route::get('/form1/get', 'SaludoController@storeForm1Contacto')->name('storeForm1');

Route::get('/form2', 'SaludoController@createForm2Contacto')->name('createForm2');
Route::post('/form2', 'SaludoController@storeForm2Contacto')->name('storeForm2');

Route::get('/form3', 'SaludoController@createForm3Contacto')->name('createForm3');
Route::post('/form3', 'SaludoController@storeForm3Contacto')->name('storeForm3');

//********* Tarea 4.4 ************/
Route::get('/form4', 'SaludoController@createForm4Contacto')->name('createForm4');
Route::post('/form4', 'SaludoController@storeForm4Contacto')->name('storeForm4');

//**** Mismo pero con formRequest, practico */
Route::get('/form5', 'SaludoController@createForm5Contacto')->name('createForm5');
Route::post('/form5', 'SaludoController@storeForm5Contacto')->name('storeForm5');

