<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propietario extends Model
{
    public function predios(){
        return $this->hasMany(predio::class);
    }
    // use HasFactory;
}
