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
        Schema::create('promociones_categorias', function (Blueprint $table) {
            $table->timestamps();

            $table->foreignId('promocion_id')
                ->constrained('promociones')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->primary(['promocion_id','categoria_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones_productos');
    }
};
