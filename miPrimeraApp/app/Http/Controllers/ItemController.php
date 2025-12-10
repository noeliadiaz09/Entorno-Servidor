<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function listarElementos()
    {
        $items = ['Manzanas', 'Plátanos', 'Peras', 'Naranjas'];
        return view("/itemsVista", ["items" => $items]);
    }
}
