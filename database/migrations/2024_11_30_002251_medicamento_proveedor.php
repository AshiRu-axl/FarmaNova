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
        Schema::create('medicamento_proveedor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id')->constrained('medicamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('proveedor_id')->constrained('proveedores')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('medicamento_proveedor');
    }
};
