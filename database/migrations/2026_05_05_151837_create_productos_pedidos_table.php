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
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table->integer('cantidad_producto_seleccionado');
            $table->timestamps();

            $table->foreignId('pedido_id')
                ->constrained('pedidos')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->foreignId('producto_id')
                ->constrained('productos')
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;

            $table->primary(['pedido_id','producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_pedidos');
    }
};
