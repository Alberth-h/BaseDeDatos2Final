<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polideportivo extends Model
{
    use HasFactory;

    public function complejo(){
        return $this->belongsTo('App\Models\Complejo');
    }

    public function areas(){
        return $this->hasMany('App\Models\Area');
    }
}
