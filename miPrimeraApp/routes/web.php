<?php

use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\CalculadoraController;

Route::get('/hola', [HolaController::class, 'index']);
Route::get('/hola/{nombre}', [HolaController::class, 'show'])->name('holaConNombre');
Route::get('/suma/{num1}/{num2}', [CalculadoraController::class, 'suma'])->name("sumaNumeros");

//Actividad 5.2
Route::get('/suma/{num1?}/{num2?}', [CalculadoraController::class, "sumarPorDefecto"]);

//Actividad 5.3
Route::get('/sorteo/numero/{num?}', [SorteoController::class, "numero"])->name("sorteoAleatorio");
