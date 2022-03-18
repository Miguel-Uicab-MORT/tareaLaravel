<?php

use App\Http\Controllers\HolaMundoController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/hola-mundo', [HolaMundoController::class, 'index'])->name('hola-mundo');
