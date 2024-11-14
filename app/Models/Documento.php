<?php

namespace App\Models;

use Iluminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use Facotry;
    public function cliente(){
        return $this -> hasOne(Cliente::class);
    }
}
