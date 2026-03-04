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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('tituloNotificacion');
            $table->string('mensaje');

            $table->foreignId('especialistaEmisor')
                ->constrained('usuarios')
                ->onDelete('no action')
            ;
            
            $table->foreignId('clienteReceptor')
                ->constrained('usuarios')
                ->onDelete('cascade')
            ;
            
            $table->boolean('leida');
            $table->dateTime('fechaLeida');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
