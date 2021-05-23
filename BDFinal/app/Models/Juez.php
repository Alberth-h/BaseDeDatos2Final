<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juez extends Model
{
    use HasFactory;

    public function comisario(){
        return $this->belongsTo('App\Models\Comisario');
    }
}
