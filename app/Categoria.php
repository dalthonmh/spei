<?php

namespace App;

use App\Equipo;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    /*
		esta tabla es de que una CATEGORIA pertenece a un equipo
    */
    /* Relacion de uno a muchos equipos */

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
