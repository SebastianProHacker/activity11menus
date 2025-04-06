<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'menu'])->name('menu');
Route::get('/inicio', [PageController::class, 'home'])->name('home');
Route::get('/fotos', [PageController::class, 'fotos'])->name('fotos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
