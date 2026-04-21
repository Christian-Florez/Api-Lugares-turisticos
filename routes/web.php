<?php

use App\Http\Controllers\LugaresController;
use App\Models\Lugar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'lugares' => Lugar::all(),
    ]);
});

Route::apiResource('lugares', LugaresController::class);
