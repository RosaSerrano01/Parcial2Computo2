<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Listar todas las categorías.
Route::get('juegos','App\Http\Controllers\JuegoController@index');

//Listar una categoría.
Route::get('juego/{id}','App\Http\Controllers\JuegoController@show');

//Crear una nueva categoría.
Route::post('juego','App\Http\Controllers\JuegoController@store');

//Actualizar una categoría.
Route::put('juego','App\Http\Controllers\JuegoController@store');

//Eliminar una categoría.
Route::delete('juego/{id}','App\Http\Controllers\JuegoController@destroy');
