<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable =['clasificacion', 'nombre', 'año', 'genero', 'director', 'descripcion'];
}
