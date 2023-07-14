<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AplicativoMotoristaController;
use \App\Http\Controllers\ApiAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AplicativoMotoristaController::class, 'fazerLogin']);
Route::get('/rotas', [AplicativoMotoristaController::class, 'getRotas']);
Route::get('/teste',[ApiAppController::class, 'teste']);
Route::get('/calcularDistancias/{idviagem}',[ApiAppController::class, 'calcularDistancias']);


Route::get('/autenticar/{email}/{password}', [ApiAppController::class, 'autenticarGet']);
Route::post('/autenticar', [ApiAppController::class, 'autenticarPost']);
Route::post('/pegarrotas', [ApiAppController::class, 'getRotas']);
Route::post('/criarviagem', [ApiAppController::class, 'criarViagem']);
Route::post('/finalizarviagem', [ApiAppController::class, 'finalizarViagem']);
Route::post('/criarpontopassagem', [ApiAppController::class, 'enviarPontoPassagem']);
