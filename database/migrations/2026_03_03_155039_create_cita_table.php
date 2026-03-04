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
        Schema::create('cita', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idUsuario')
                ->constrained('usuarios') 
                ->onDelete('cascade')
            ;

            $table->foreignId('idMascota')
                ->constrained('mascota') 
                ->onDelete('cascade')
            ;

            $table->foreignId('idServicio')
                ->constrained('servicio')
                ->onDelete('no action')
            ;

            $table->foreignId('idEspecialista')
                ->constrained('usuarios')
                ->onDelete('no action')
            ;
            
            $table->date('fechaCita');
            $table->time('horaCita');
            $table->enum('estado', ['Pendiente', 'Confirmada', 'Cancelada', 'Realizada', 'No asistio']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita');
    }
};
