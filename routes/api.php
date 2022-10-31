<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OportunidadeController;
use App\Http\Controllers\UserController;

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::delete('logout', [AuthController::class, 'logout']);

    Route::apiResource('oportunidades', OportunidadeController::class);

    Route::get('users-clientes', [UserController::class, 'clientes']);
});
