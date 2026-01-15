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

    public function borrarProductos($id)
    {
        $prod = Producto::find($id);
        $prod->delete();
        return redirect()->route("tablasProducto");
    }

    public function modificarProducto($id)
    {

    }

    public function actualizarProducto($id)
    {
        $prod = Producto::find($id);
        return view("formActualizarProducto", ["prod" => $prod]);
    }
}
