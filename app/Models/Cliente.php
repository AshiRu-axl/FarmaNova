<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    protected $fillable = ["nombre", "apellido", "documento_id", "direccion", "correo", "telefono"];
}
