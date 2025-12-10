<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class SorteoController extends Controller
{
    // //Actividad 5.3
    // public function numero($num = null)
    // {

    //     if ($num == null) {
    //         $aleatorio = random_int(0, 100);
    //     } else {
    //         $aleatorio = random_int(0, $num);

    //     }
    //     return view("numeroAleatorio", ["aleatorio" => $aleatorio]);
    // }

    //Actividad 5.4
    public function numero($num = null)
    {

        if ($num == null) {
            return redirect()->route('sorteoAleatorio', ['num' => 50]);

        } else {
            $aleatorio = random_int(0, $num);

        }
        return view("numeroAleatorio", ["aleatorio" => $aleatorio]);
    }
}