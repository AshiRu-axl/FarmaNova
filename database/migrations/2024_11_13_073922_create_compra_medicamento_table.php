<?php

// database/migrations/xxxx_xx_xx_create_compra_medicamento_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('compra_medicamento', function (Blueprint $table) {
        $table->id();
        $table->foreignId('compra_id')->constrained('compras')->cascadeOnDelete()->cascadeOnUpdate();
        $table->foreignId('medicamento_id')->constrained('medicamentos')->cascadeOnDelete()->cascadeOnUpdate();
        $table->decimal('precio_sugerido', 10, 2);
        $table->decimal('precio_compra', 10, 2);
        $table->integer('cantidad');
        $table->string('numero_lote', 50);
        $table->date('fecha_vencimiento');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('compra_medicamento');
}

};