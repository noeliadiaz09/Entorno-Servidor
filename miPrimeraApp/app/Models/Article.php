<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Atributos autorellenablesen el formulario de creación de articulo
    protected $fillable = ['title', 'content', 'publish_date', 'category', 'views'];
}
