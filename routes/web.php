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

// localhost/

// Route::get('/RUTA', <FUNCION o LLAMAR A UN METODO DE UN CONTROLLER>);
Route::get('/inicio', function () {
    return view('dashboard.inicio');
});
Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/categorias/mostrar','CategoriaController@getCategorias')
    ->name('categoria.listar')
    ->middleware('auth');
// href="{{ route('categorias.listar') }}"

Route::get('/categorias/agregar','CategoriaController@add')
    ->name('categoria.agregar');
Route::post('/categorias/agregar','CategoriaController@save')
    ->name('categoria.guardar');
Route::get('/categorias/editar','CategoriaController@edit')
    ->name('categoria.editar');
Route::post('/categoria/actualizar', 'CategoriaController@update')
    ->name('categoria.actualizar');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/verificarsesion', function() {
    if(Auth::check() == true) {
        return "INICIO SESION:". Auth::user()->email;
    } else {
        return "SIN SESION INICIADA";
    }
});
// login
// logout
// register