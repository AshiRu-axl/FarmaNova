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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 50);
            $table->integer('estado');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 10, 2);
            $table->string('codigo', 50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
    
};
