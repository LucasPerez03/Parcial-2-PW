<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ReservaController;


Route::get('/', [PaginaController::class, 'inicio'])->name('paginas.inicio');
Route::get('/menu',[PaginaController::class, 'menu'])->name('paginas.menu');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('paginas.contacto');

Route::resource('reservas', ReservaController::class)->only([
    'index','create','store','destroy'
]);
