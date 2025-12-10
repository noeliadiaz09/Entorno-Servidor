<?php

use App\Http\Controllers\CalculadoraIMCController;
use App\Http\Controllers\CalculadoraOperacionesBasicasController;
use App\Http\Controllers\ItemController;
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

//Actividad Examen 23/24
//Apartado 1
Route::get("/calcularimc/{peso}/{alturaCm}", [CalculadoraIMCController::class, "calculadoraImc"])->name("calcularimc");

//Ejercicios Refuerzo
//Refuerzo 1
Route::get('/calculate/{num1}/{num2}/{operation}', [CalculadoraOperacionesBasicasController::class, "calcular"])->name("calcularBasico");

//Refuerzo 2
Route::get('/listar', [ItemController::class, "listarElementos"]);

//Refuerzo 3
Route::get('/items/{id}', [ItemController::class, "detalleItem"]);
