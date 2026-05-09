<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos_especies', function (Blueprint $table) {
            $table->timestamps();

            $table->foreignId('producto_id')
                ->constrained('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->foreignId('especie_id')
                ->constrained('especies')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->primary(['producto_id','especie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_especies');
    }
};
