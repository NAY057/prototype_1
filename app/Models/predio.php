<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class predio extends Model
{
    public function empresa(){
        return $this->belongsTo(empresa::class);
    }

    public function propietario(){
        return $this->belongsTo(propietario::class);
    }

    public function revisiones_estrato(){
        return $this->belongsTo(revision_estrato::class);
    }

    public function reposicion_resurso(){
        return $this->belongsTo(reposicion_recurso::class);
    }

    public function apelacion_subsidio(){
        return $this->belongsTo(apelacion_subsidio::class);
    }

    public function auditoria(){
        return $this->belongsTo(auditoria::class);
    }

    // use HasFactory;
}
