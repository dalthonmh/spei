<?php

namespace App;

use App\Marca;
use App\Categoria;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    /* Relacion que dice que un equipo tiene una marca clave foranea es marca_id */

	public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    /* Relacion que dice que un equipo tiene una categoria  */

	public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
