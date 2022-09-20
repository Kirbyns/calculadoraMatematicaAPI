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

Route::get("simples/funcao", "App\http\Controllers\api\simplescontroller@funcao");

Route::post("simples/soma", "App\http\Controllers\api\simplescontroller@soma");
Route::post("simples/subtracao", "App\http\Controllers\api\simplescontroller@subtracao");
Route::post("simples/multiplicacao", "App\http\Controllers\api\simplescontroller@multiplicacao");
Route::post("simples/divisao", "App\http\Controllers\api\simplescontroller@divisao");
Route::post("simples/potencia", "App\http\Controllers\api\simplescontroller@potencia");
Route::post("simples/raizquadrada", "App\http\Controllers\api\simplescontroller@raizQuadrada");
Route::post("simples/raizqualquer", "App\http\Controllers\api\simplescontroller@raizQualquer");
