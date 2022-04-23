<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    
    //relacion 1 a muchos (inversa)

    public function user(){
        return $this->belongsTo(User::class);
    }

    //relación 1 a muchos polimorfica

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
    
    //relación muchos a muchos polimorfica

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
