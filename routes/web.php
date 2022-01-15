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
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::post('login','Auth\LoginController@login');

Route::group(['middleware' => 'admin'], function () {
    /* Rutas GET */
    Route::get('/', 'HomeController@index');
    Route::get('clientes/show/{id}','ClientesController@show');
    /* Rutas POST */
    Route::post('clientes/update','ClientesController@update');
    Route::post('clientes/eliminar','ClientesController@eliminar');
    /* CRUDS básicos */
    Route::resource('clientes','ClientesController');
    
});
