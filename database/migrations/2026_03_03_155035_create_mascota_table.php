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
        Schema::create('mascota', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMascota');
            $table->enum('genero', ['Femenino', 'Masculino', 'Neutro']);
            $table->date('fechaNacimiento');

            $table->foreignId('idRaza')
                ->constrained('raza')
                ->onDelete('no action')
            ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
