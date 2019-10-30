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

Route::get('/', function () {
    return view('contacto');
});

Route::get('blog/id)',function($id){
    return view('blog', array('id'=>$id));
})->name('blog');

Route::get('blog/{id}/{nombre}',function ($id, $nombre){
return view('blog', ['id' =>$id, 'nombre'=>$nombre]);
})->where(['id' => '[0-9]+', 'nombre' => '[A-Za-z]+'])->name('blog.nombreId');

