<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    public function medicamentos()
    {
        return $this->belongsToMany(Medicamento::class)->withTimestamps();
    }

    protected $fillable = ["nombre", "descripcion", "estado", "tipo"];
}


