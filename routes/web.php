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

Route::get('/', 'adminController@index');
Route::get('/clients/cadastrar', 'ClientsController@index')->name('clients_create');
Route::post('/clients/store', 'ClientsController@store');
Route::get('/clients', 'ClientsController@show');