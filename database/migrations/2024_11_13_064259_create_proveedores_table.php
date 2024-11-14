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
    Schema::create('proveedores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 50);
        $table->string('telefono', 50);
        $table->string('correo', 50);
        $table->foreignId('documento_id')->constrained('documentos');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proveedores');
}

};
