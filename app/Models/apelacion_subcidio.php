<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apelacion_subcidio extends Model
{
    public function predios(){
        return $this->hasMany(predio::class);
    }
    // use HasFactory;
}
