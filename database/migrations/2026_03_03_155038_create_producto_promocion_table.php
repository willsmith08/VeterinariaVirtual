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
        Schema::create('producto_promocion', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idProducto')
                ->constrained('producto') 
                ->onDelete('cascade')
            ;

            $table->foreignId('idPromocion')
                ->constrained('promocion') 
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
        Schema::dropIfExists('producto_promocion');
    }
};
