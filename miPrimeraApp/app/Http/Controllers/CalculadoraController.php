<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return view("sumaVista", ["num1" => $num1, "num2" => $num2, "resultado" => $resultado]);
    }

    //Actividad 5.2
    public function sumarPorDefecto($num1 = null, $num2 = null)
    {
        if ($num1 == null) {
            $num1 = 2;
        }
        if ($num2 == null) {
            $num2 = 2;
        }
        $resultado = $num1 + $num2;

        return view("sumaVista", ["num1" => $num1, "num2" => $num2, "resultado" => $resultado]);
    }

}
