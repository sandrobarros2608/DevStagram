<?php

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/registrarse', [RegisterController::class, 'index'])->name('registrarse');
Route::post('/registrarse', [RegisterController::class, 'store']);

Route::get('/iniciar-sesion', [LoginController::class, 'index'])->name('login');
Route::post('/iniciar-sesion', [LoginController::class, 'store']);
Route::post('/cerrar-sesion', [LogoutController::class, 'store'])->name('logout');

Route::get('/{user:username}', [PostController::class, 'index'])->name('muro');
Route::get('/muro/create', [PostController::class, 'create'])->name('muro.create');
Route::post('/muro', [PostController::class, 'store'])->name('muro.store');

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
;