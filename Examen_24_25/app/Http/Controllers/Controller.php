<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function showLetra($dni)
    {
        $resto = $dni % 23;

        switch ($resto) {
            case 0:
                $valor = "T";
                break;
            case 1:
                $valor = "R";
                break;
            case 2:
                $valor = "W";
                break;
            case 3:
                $valor = "A";
                break;
            case 4:
                $valor = "G";
                break;
            case 5:
                $valor = "M";
                break;
            case 6:
                $valor = "Y";
                break;
            case 7:
                $valor = "F";
                break;
            case 8:
                $valor = "P";
                break;
            case 9:
                $valor = "D";
                break;
            case 10:
                $valor = "X";
                break;
            case 11:
                $valor = "B";
                break;
            case 12:
                $valor = "N";
                break;
            case 13:
                $valor = "J";
                break;
            case 14:
                $valor = "Z";
                break;
            case 15:
                $valor = "S";
                break;
            case 16:
                $valor = "Q";
                break;
            case 17:
                $valor = "V";
                break;
            case 18:
                $valor = "H";
                break;
            case 19:
                $valor = "L";
                break;
            case 20:
                $valor = "C";
                break;
            case 21:
                $valor = "K";
                break;
            case 22:
                $valor = "E";
                break;
        }

        return view("verLetra", ["valor" => $valor, "dni" => $dni]);

    }
}
