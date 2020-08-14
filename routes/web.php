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
    return view('welcome');
});

/*Route::get('/supermercado','SupermercadoController@index');
Route::post('/supermercado','SupermercadoController@store');
Route::get('/supermercado/{id}','SupermercadoController@show');
Route::patch('/supermercado/{id}','SupermercadoController@update');
Route::delete('/supermercado/{id}','SupermercadoController@destroy');*/

Route::resource('supermercados','SupermercadoController');