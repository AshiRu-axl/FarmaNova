<?php
// database/migrations/xxxx_xx_xx_create_rol_permiso_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('roles_id')->constrained('roles');
            $table->foreignId('permiso_id')->constrained('permisos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rol_permiso');
    }
};
