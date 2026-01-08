<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index()
    {
        return "Hola, mundo";
    }
    public function show($nombre)
    {
        return view('holaVista', ['nombre' => $nombre]);
    }

    function form()
    {
        return view('form');
    }

    public function procesar(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'asunto' => 'required'
        ]);

        $email = $r->get("email");
        $asunto = $r->get("asunto");
        $contenido = $r->get("contenido");

        return view("resultFormVista", ["email" => $email, "asunto" => $asunto, "contenido" => $contenido]);
    }
}
