<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraOperacionesBasicasController extends Controller
{
    public function calcular($num1, $num2, $operation)
    {
        switch ($operation) {
            case "+":
                $resultado = $num1 + $num2;
                break;
            case "-":
                $resultado = $num1 - $num2;
                break;
            case "*":
                $resultado = $num1 * $num2;
                break;
            case "%":
                $resultado = $num1 / $num2;
                break;
            default:
                $resultado = "Operador NO válido";
        }

        return view("calculadoraOperacionesBasicasVista", ["resultado" => $resultado, "num1" => $num1, "num2" => $num2, "operation" => $operation]);
    }
}
