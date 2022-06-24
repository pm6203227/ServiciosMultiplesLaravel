<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get("/", "App\Http\Controllers\HomeController@index");
Route::get("/servicio1", "App\Http\Controllers\HomeController@rut1");
Route::get("/servicio2/{number}", "App\Http\Controllers\HomeController@rut2");
Route::post("/servicio3", "App\Http\Controllers\HomeController@rut3Request");
