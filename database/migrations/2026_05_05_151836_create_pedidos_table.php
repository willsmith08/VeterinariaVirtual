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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->enum('esta_pagado', ['Reembolsado','Pagado','No pagado']);
            $table->timestamps();

            $table->foreignId('estadopedido_id')
                ->constrained('estadospedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->foreignId('metodopago_d')
                ->constrained('metodospagos')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
