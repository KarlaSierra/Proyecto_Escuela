<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    public function grados(){
        return $this->belongsToMany(Grado::class)->withPivot('id');
    }

}
