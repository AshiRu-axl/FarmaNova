<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('medicamento_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id')->constrained('medicamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('detalle_id')->constrained('detalles')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('medicamento_detalle');
    }
    
}
;