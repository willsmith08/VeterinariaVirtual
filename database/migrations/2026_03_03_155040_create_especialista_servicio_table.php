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
        Schema::create('especialista_servicio', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idEspecialista')
                ->constrained('usuarios')
                ->onDelete('cascade')
            ;

            $table->foreignId('idServicio')
                ->constrained('servicio')
                ->onDelete('cascade')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialista_servicio');
    }
};
