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
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('cliente_id')->nullable()->constrained('clientes')->nullOnDelete()->cascadeOnUpdate();
        $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete()->cascadeOnUpdate();
        $table->dateTime('fecha_hora');
        $table->string('tipo_comprobante', 50);
        $table->string('numero_comprobante', 50);
        $table->integer('estado');
        $table->decimal('impuesto', 10, 2);
        $table->decimal('total', 10, 2);
        $table->decimal('descuento', 10, 2);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('ventas');
}

    
};


