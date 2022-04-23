<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion 1 a muchos (inversa)

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    //relación polimorfica 1 a 1
    
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

    //relación 1 a muchos polimorfica

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
