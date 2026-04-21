<?php

use App\Http\Controllers\LugaresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/lugares', [LugaresController::class, 'index']);
