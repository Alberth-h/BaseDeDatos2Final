<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function complejo(){
        return $this->belongsTo('App\Models\Complejo');
    }

    public function comisarios(){
        return $this->hasMany('App\Models\Comisario');
    }
}
