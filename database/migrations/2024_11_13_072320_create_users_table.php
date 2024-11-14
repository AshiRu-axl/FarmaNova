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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->foreignId('roles_id')->constrained('roles');
        $table->string('nombre', 50);
        $table->string('correo', 50);
        $table->string('contraseña', 50);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('users');
}

};
