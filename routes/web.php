<?php

use App\Http\Controllers\LugaresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('lugares', LugaresController::class);
