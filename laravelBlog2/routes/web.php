<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BlogController::class,'verPortada'])->name('verPortada');

Route::get('/noticia/{id}',[BlogController::class,'verNoticia'])->name('verNoticia')->whereNumber("id");


Route::get('/noticia/nueva',[BlogController::class,'nuevaNoticia'])->name('nuevaNoticia');

Route::post('/noticia/nueva',[BlogController::class,'procesarNuevaNoticia'])->name('procesarNuevaNoticia');
