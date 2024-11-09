<?php

use App\Http\Controllers\TravelController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//user apik
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);


//Travel apik
Route::get('/travels', [TravelController::class, 'index']);
Route::get('/travels/{flight_id}/{user_id}', [TravelController::class, 'show']);
Route::post('/travels', [TravelController::class, 'store']);
Route::put('/travels/{flight_id}/{user_id}', [TravelController::class, 'update']);
Route::delete('/travels/{flight_id}/{user_id}', [TravelController::class, 'destroy']);
