<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/registrarse', [RegisterController::class, 'index'])->name('registrarse');
Route::post('/registrarse', [RegisterController::class, 'store']);

Route::get('muro', [PostController::class, 'index'])->name('muro');;