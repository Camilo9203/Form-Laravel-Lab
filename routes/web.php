<?php

use Illuminate\Support\Facades\Route;

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
    return view('registro.ficha');
});

Route::post('users', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::get('lista', 'App\Http\Controllers\UserController@export')->name('export');
Route::get('notificacion', 'App\Http\Controllers\UserController@notificacion')->name('notificacion');

// Route::get('registro', 'ControllerCursos@createFicha');
// Route::post('create', 'ControllerCursos@create');
// Route::get('lista', 'ControllerCursos@lista');
// Route::get('archivo', 'ControllerCursos@export');
// Route::get('departamentos', 'ControllerCursos@departamentos');
// Route::get('/', function () {
//     return view('registro.ficha');
// });
