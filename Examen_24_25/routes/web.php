<?php

use App\Http\Controllers\DniController;
use App\Http\Controllers\VideojuegosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calculardni/{dni}', [DniController::class, 'showLetra'])->name("showLetra");
Route::get('/videojuegos/registrar', [VideojuegosController::class, 'showFormRegistro'])->name("showFormRegistro");
Route::post('/videojuegos/registrar', [VideojuegosController::class, 'procesarFormRegistro'])->name("procesarFormRegistro");