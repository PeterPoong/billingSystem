<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\ProfileController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('register',[RegisterController::class, 'register']);
Route::post('login',[LoginController::class,'login']);
// Route::post('createProfile',[ProfileController::class,'createProfile']);