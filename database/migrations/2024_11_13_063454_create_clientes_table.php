<?php

// database/migrations/xxxx_xx_xx_create_clientes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('documento_id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion', 50);
            $table->string('telefono', 50);
            $table->string('correo', 50);
            $table->tinyInteger('estado')->default(1);
            $table->timestamps(); // Si necesitas las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};

