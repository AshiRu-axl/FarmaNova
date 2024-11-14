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
        Schema::create('metadata_medicamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id')->constrained('medicamentos');
            $table->foreignId('metadata_id')->constrained('metadatos');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('metadata_medicamento');
    }
    
};
