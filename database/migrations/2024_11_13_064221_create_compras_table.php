<?php

// database/migrations/xxxx_xx_xx_create_compras_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proveedor_id')->constrained('proveedores');
            $table->string('tipo_comprobante', 50);
            $table->string('numero_comprobante', 50);
            $table->integer('estado');
            $table->dateTime('fecha_hora');
            $table->decimal('impuesto', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('compras');
    }
};
