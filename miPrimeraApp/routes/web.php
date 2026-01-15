<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CalculadoraAmpliadaController;
use App\Http\Controllers\CalculadoraIMCController;
use App\Http\Controllers\CalculadoraOperacionesBasicasController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SorteoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\UserController;



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

//Formulario de ejemplo
Route::get('/formulario', [HolaController::class, 'form'])->name("formulario");
Route::post('/procesado', [HolaController::class, 'procesar'])->name('procesarForm');

//Refuerzo 8
Route::get('/refuerzo8', [UserController::class, 'showForm'])->name("formulario8");
Route::post('/refuerzo8', [UserController::class, 'storeName'])->name('guardarNombre');

//Refuerzo 10
Route::get('/refuerzo10', [CalculadoraAmpliadaController::class, 'showFormRefuerzo10'])->name("formulario10");
Route::post('/refuerzo10', [CalculadoraAmpliadaController::class, 'procesarFormRefuerzo10'])->name('procesarOperacion');

//Pruebas BD
Route::get('/crearArt', [ArticleController::class, 'crearArticulo'])->name("crearArticulo");

//Pruebas BD con formulario
Route::get('/guardarArt', action: [ArticleController::class, 'showFormArticulo'])->name("insertarArticulo");
Route::post('/guardarArt', [ArticleController::class, 'procesarFormArticulo'])->name("procesarArticulo");

//Prueba de BD Consultas
//---Listar Articulos---
Route::get('/listarArticulos', action: [ArticleController::class, 'listarArticulos'])->name("listarArticulos");

//Actividad 5.11
Route::get('/producto', [ProductoController::class, 'showFormProducto'])->name("insertarProducto");
Route::post('/producto', [ProductoController::class, 'procesarFormProducto'])->name("procesarProducto");
//Actividad 5.12
Route::get('/producto/borrar/{id}', [ProductoController::class, 'borrarProductos'])->name("borrarProductos");
Route::get('/producto/modificar/{id}', [ProductoController::class, 'modificarProductos'])->name("modificarProductos");
Route::get('/productos/listar', [ProductoController::class, 'tablasProductos'])->name("borrarProductos");

//Actividad 5.14
Route::get('/producto/modificar/{id}', [ProductoController::class, 'actualizarProducto'])->name("actualizarProducto");
