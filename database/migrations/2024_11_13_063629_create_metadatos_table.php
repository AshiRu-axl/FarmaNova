<?php
// database/migrations/xxxx_xx_xx_create_metadatos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metadatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 50)->nullable();
            $table->integer('estado');
            $table->string('tipo', 50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('metadatos');
    }
    
};
