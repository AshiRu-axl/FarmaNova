<?php
// database/migrations/xxxx_xx_xx_create_metadata_medicamento_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metadata_medicamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medicamento_id')->constrained('medicamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('metadata_id')->constrained('metadatos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('metadata_medicamento');
    }
    
}
;