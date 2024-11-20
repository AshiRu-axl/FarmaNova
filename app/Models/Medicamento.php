<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->withTimestamps()
            ->withPivot('precio_venta', 'cantidad', 'descuento');
    }

    public function compras()
    {
        return $this->belongsToMany(Compra::class)->withTimestamps()
            ->withPivot('precio_sugerido', 'precio_compra', 'cantidad', 'numero_lote', 'fecha_vencimiento');
    }

    public function metadatos()
    {
        return $this->belongsToMany(Metadato::class)->withTimestamps();
    }
}
