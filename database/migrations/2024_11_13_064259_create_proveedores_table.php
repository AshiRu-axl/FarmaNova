<?php

// database/migrations/xxxx_xx_xx_create_proveedores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('telefono', 50);
            $table->string('correo', 50);
            $table->timestamps(); // Si necesitas las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
