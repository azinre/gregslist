<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

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

Route::get('/ads', [AdsController::class, 'index']);
Route::get('/ads/{id}', [AdsController::class, 'show']);
Route::post('/ads', [AdsController::class, 'store']);
Route::put('/ads/{id}', [AdsController::class, 'update']);
Route::delete('/ads/{id}', [AdsController::class, 'destroy']);

