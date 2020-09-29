<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auditoria extends Model
{
    // public function predios(){
    //     return $this->hasMany(predio::class);
    // }
    public function auditoria(){
        return $this->belongsTo(auditoria::class);
    }
    // use HasFactory;
}
