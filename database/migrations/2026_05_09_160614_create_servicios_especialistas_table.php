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
        Schema::create('servicios_especialistas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('servicio_id')
                ->constrained('servicios')
                ->onDelete('cascade')
            ;

            $table->foreignId('especialista_id')
                ->constrained('especialistas', 'user_id')
                ->onDelete('cascade')
            ;

            $table->unique(['servicio_id','especialista_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos_especialistas');
    }
};
