<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('venta_medicamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_id')->constrained('ventas');
            $table->foreignId('medicamento_id')->constrained('medicamentos');
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
