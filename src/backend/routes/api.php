<?php

use App\Http\Controllers\Crypto\CryptoController;
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
Route::group(['prefix' => 'crypto'], function () {
    Route::get('/', [CryptoController::class, 'index']);
    Route::get('/limit={limit}', [CryptoController::class, 'limit']);
    Route::get('/{id}/limit={limit}', [CryptoController::class, 'assetMarket']);
    Route::get('/{id}', [CryptoController::class, 'show']);
    Route::get('/{id}/time={time}', [CryptoController::class, 'assetHistory']);
    Route::get('/rates', [CryptoController::class, 'rate']);
    Route::get('/rates/{id}', [CryptoController::class, 'showRate']);
    Route::get('/exchanges', [CryptoController::class, 'exchange']);
    Route::get('/exchanges/{id}', [CryptoController::class, 'showExchange']);
    Route::get('/markets', [CryptoController::class, 'market']);
});
