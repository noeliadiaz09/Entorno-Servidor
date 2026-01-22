<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    public function showFormRegistro()
    {
        return view("showFormRegistro");
    }

    public function procesarFormRegistro(Request $r)
    {
        $r->validate([
            'nombre' => 'required|string|unique:post|max:100',
            'plataforma' => 'required|string|max:50',
            'genero' => 'required|string|max:50',
            'clasificacion' => 'required|integer|max:18|min:3'
        ]);

        $videojuego = Videojuego::create($r->all());

        return view("showFormRegistro", ["videojuego" => $videojuego]);
    }
}
