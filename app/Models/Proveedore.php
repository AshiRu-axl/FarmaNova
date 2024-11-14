<?php

namespace App\Models;
use Iluminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFacotry;
    public function compras(){
        return $this->hasMany(Compra::class)->withTimestamps();
    }
}
