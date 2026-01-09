<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraAmpliadaController extends Controller
{
    public function showFormRefuerzo10()
    {
        return view("refuerzo10Form");
    }

    public function procesarFormRefuerzo10(Request $r)
    {

        $r->validate([
            "num1" => "required|integer",
            "num2" => "required|integer"
        ]);

        $num1 = $r->get("num1");
        $num2 = $r->get("num2");
        $operador = $r->get("operador");

        switch ($operador) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                $resultado = $num1 / $num2;
                break;
        }

        return view("refuerzo10Form", ["resultado" => $resultado]);
    }
}
