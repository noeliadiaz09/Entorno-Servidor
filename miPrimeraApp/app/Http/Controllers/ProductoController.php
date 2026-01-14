<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function showFormProducto()
    {
        return view("formProducto");
    }

    public function procesarFormProducto(Request $r)
    {
        $r->validate([
            "nombre" => "required|string",
            "descripcion" => "required|string",
            "precio" => "required|numeric",
            "stock" => "required|integer"
        ]);

        $prod = Producto::create($r->all());

        return view("insertadoExitosoProducto", ["prod" => $prod]);
    }
}
