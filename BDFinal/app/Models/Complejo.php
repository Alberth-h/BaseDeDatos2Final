<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complejo extends Model
{
    use HasFactory;
    
     //Relacion uno a muchos (inversa)
    public function sede(){
        return $this->belongsTo('App\Models\Sede');
    }

    public function unideportivo(){
        return $this->hasOne('App\Models\Unideportivo');
    }

    public function polideportivo(){
        return $this->hasOne('App\Models\Polideportivo');
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento');
    }
}
