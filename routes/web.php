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
Route::get('/', 'HomeController@index');

Route::post('clientes/update','ClientesController@update');
Route::resource('clientes','ClientesController');
Route::post('clientes/eliminar','ClientesController@eliminar');
Route::get('clientes/show/{id}','ClientesController@show');

Route::post('aseguradoras/update','AseguradorasController@update');
Route::resource('aseguradoras','AseguradorasController');
Route::post('aseguradoras/eliminar','AseguradorasController@eliminar');
Route::get('aseguradoras/show/{id}','AseguradorasController@show');

Route::post('siniestros/update','SiniestrosController@update');
Route::resource('siniestros','SiniestrosController');
Route::post('siniestros/eliminar','SiniestrosController@eliminar');
Route::get('siniestros/show/{id}','SiniestrosController@show');