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
            $table->foreignId('documento_id')->constrained('documentos');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 50);
            $table->string('telefono', 50);
            $table->string('correo', 50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
    
};
