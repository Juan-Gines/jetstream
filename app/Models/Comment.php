<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    //relación polimorfica 1 a muchos
    public function commentable(){
        return $this->morphTo();
    }
}
