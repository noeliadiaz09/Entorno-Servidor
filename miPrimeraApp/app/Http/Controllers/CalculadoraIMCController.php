<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraIMCController extends Controller
{
    public function calculadoraImc($peso, $alturaCm)
    {
        // Convertir altura de centímetros a metros
        $altura = $alturaCm / 100;
        $IMC = $peso / ($altura * $altura);

        return view("calculadoraIMCVista", ["peso" => $peso, "altura" => $altura, "IMC" => $IMC]);
    }
}