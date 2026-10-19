<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'inicio'])->name('paginas.inicio');
Route::get('/menu',[PaginaController::class, 'menu'])->name('paginas.menu');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('paginas.contacto');