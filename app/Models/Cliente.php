<?php

namespace App\Models;

use Iluminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFacotry;
    public function documento(){
        return $this->belongsTo(Documento::class);
    }

    public function ventas(){
        return $this->hasMany(Venta::class);
    }
}