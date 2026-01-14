<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function crearArticulo()
    {
        $art = new Article();
        $art->title = 'Los Marcheneros invaden Nueva York';
        $art->content = 'Bla, bla, bla';
        $art->publish_date = '2025-01-10';
        $art->category = 'Drama';
        $art->views = 333;
        $art->save();
    }

    public function showFormArticulo()
    {
        return view("formBase");
    }

    public function procesarFormArticulo(Request $r)
    {
        $r->validate([
            "title" => "required|string",
            "content" => "required|string",
            "publish_date" => "required|date",
            "category" => "nullable|string",
            "views" => "integer"
        ]);

        //De esta manera se hace automáticamente lo comentado abajo
        $art = Article::create($r->all());

        // $art = new Article();
        // $art->title = $r->get("title");
        // $art->content = $r->get("content");
        // $art->publish_date = $r->get("publish_date");
        // $art->category = $r->get("category");
        // $art->views = $r->get("views");

        // //Guardar en la base de datos
        // $art->save();

        return view("articuloCreado", ["articulo" => $art]);
    }

    public function listarArticulos()
    {
        //Listar todos los articulo
        // $articulosList = Article::all();

        //Listar solo artículos de más de 300 visitas
        $articulosList = Article::where("views", ">", 1000)->get();

        return view("listadoArticulo", ["articuloList" => $articulosList]);
    }



}
