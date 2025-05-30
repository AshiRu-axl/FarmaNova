<?php
// database/migrations/xxxx_xx_xx_create_venta_medicamento_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('venta_medicamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('medicamento_id')->constrained('medicamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal('precio_venta', 10, 2);
            $table->integer('cantidad');
            $table->decimal('descuento', 10, 2)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('venta_medicamento');
    }
    
};
