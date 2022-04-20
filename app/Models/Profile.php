<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //relacion 1:1 users profile

    public function user(){
        return $this->belongsTo(User::class);
    }
}
