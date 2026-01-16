<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function verPortada()
    {
        return view("portada");
    }

    public function verNoticia($id)
    {
        $noticia = Noticia::find($id);

        return view("noticia", ["noticia" => $noticia]);
    }

    public function nuevaNoticia()
    {
        return view("nuevaNoticia");
    }

    public function procesarNuevaNoticia(Request $r)
    {

        $noticia = new Noticia();
        $noticia->entradilla = $r->get("entradilla");
        $noticia->cuerpo = $r->get("cuerpo");
        $noticia->titular = $r->get("titular");
        $noticia->fecha = date("Y-m-d H:i:s");
        $noticia->save();

        return view("noticiaCreada");

    }
}
