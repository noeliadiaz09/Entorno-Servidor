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
}
