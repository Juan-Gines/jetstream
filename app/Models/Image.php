<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Image extends Model
{
    use HasFactory;

    protected $guarded=[];//permitimos la asignacion masiva a todos los campos

    //relacion polimorfica 1 a 1
    //debemos poner el nombre de la funcion igual que los campos nomre_id nombre_type de la tabla

    public function imageable(){
        return $this->morphTo();
    }
}
