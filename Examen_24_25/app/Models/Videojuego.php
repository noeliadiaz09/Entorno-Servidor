<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    protected $fillable = ['nombre', 'plataforma', 'genero', 'clasificacionPegi'];
}
