<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function proveedore()
    {
        return $this->belongsTo(Proveedore::class);
    }

    public function medicamentos()
    {
        return $this->belongsToMany(Compra::class)->withTimestamps()
            ->withPivot('precio_sugerido', 'precio_compra', 'cantidad', 'numero_lote', 'fecha_vencimiento');
    }
}
