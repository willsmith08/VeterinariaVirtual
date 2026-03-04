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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idUsuario')
                ->constrained('usuarios') 
                ->onDelete('cascade')
            ;
            
            $table->float('total');
            $table->enum('estado', ['Pendiente', 'Pagado', 'Procesando', 'Enviado', 'Entregado', 'Cancelado']);
            $table->enum('metodoPago', ['Efectivo', 'Transferencia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
