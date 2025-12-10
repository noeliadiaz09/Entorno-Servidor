<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function listarElementos()
    {
        $items = ['Manzanas', 'Plátanos', 'Peras', 'Naranjas'];
        return view("itemsVista", ["items" => $items]);
    }

    public function detalleItem($id)
    {
        $items = ['Manzanas', 'Plátanos', 'Peras', 'Naranjas'];

        if (array_key_exists($id, $items)) {
            $item = $items[$id];
            return view("detallesElementoVista", ["id" => $id, "item" => $item]);
        } else {
            return "Elemento no encontrado";
        }
    }
}
