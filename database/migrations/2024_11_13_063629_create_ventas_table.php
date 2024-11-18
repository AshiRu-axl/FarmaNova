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
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('fecha_hora');
            $table->string('tipo_comprobante', 50);
            $table->string('numero_comprobante', 50);
            $table->integer('estado');
            $table->decimal('impuesto', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('descuento', 10, 2)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
    
    
};
