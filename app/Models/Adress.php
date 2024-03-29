<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adress extends Model
{
    use HasFactory;

    protected $table = 'adresses';

    //relacion 1 a 1 (inversa)
    public function user(){
        return $this->belongsTo(User::class);
    }
}
