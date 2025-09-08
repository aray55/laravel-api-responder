<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;

Route::prefix('v1')->group(function () {
    Route::get('/users', [UserController::class, 'index']);      
    Route::post('/users', [UserController::class, 'store']);     
    Route::get('/users/{id}', [UserController::class, 'show']);  

});
