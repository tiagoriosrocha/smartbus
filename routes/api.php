<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ApiAppController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/autenticar/{email}/{password}', [ApiAppController::class, 'autenticarGet']);
Route::post('/autenticar', [ApiAppController::class, 'autenticarPost']);
Route::post('/pegarrotas', [ApiAppController::class, 'getRotas']);
Route::post('/criarviagem', [ApiAppController::class, 'criarViagem']);
Route::post('/finalizarviagem', [ApiAppController::class, 'finalizarViagem']);
Route::post('/criarpontopassagem', [ApiAppController::class, 'enviarPontoPassagem']);
