<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comisario extends Model
{
    use HasFactory;

    public function evento(){
        return $this->belongsTo('App\Models\Evento');
    }

    public function observador(){
        return $this->hasOne('App\Models\Observador');
    }

    public function juez(){
        return $this->hasOne('App\Models\Juez');
    }
}
