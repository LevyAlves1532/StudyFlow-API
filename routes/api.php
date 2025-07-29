<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudyPlanController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function() {
    Route::post('/auth/login', [AuthController::class, 'login']);

    Route::post('/user', [UserController::class, 'store']);

    Route::middleware('auth:api')->group(function () {
        Route::put('/auth/refresh', [AuthController::class, 'refresh']);
        Route::delete('/auth/logout', [AuthController::class, 'logout']);

        Route::get('/user', [UserController::class, 'index']);

        Route::apiResource('/study-plan', StudyPlanController::class);
    });
});
