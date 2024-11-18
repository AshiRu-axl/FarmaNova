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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('documento_id', 50)->unique()->nullable();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 50)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('correo', 50)->unique()->nullable();
            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
    
    
};
