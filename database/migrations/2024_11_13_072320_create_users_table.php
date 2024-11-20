<?php
// database/migrations/xxxx_xx_xx_create_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Esto creará un BIGINT como clave primaria
            $table->bigInteger('role_id')->constrained('roles');
            $table->string('nombre', 50);
            $table->string('correo', 50)->unique();
            $table->string('contraseña', 255); // Asegura suficiente espacio para almacenar un hash
            $table->timestamps();
            $table->engine = 'InnoDB'; // Forzamos el motor InnoDB
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
    

};
