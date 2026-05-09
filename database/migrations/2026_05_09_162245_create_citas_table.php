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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cita');
            $table->enum('estado_pago',['Reembolsado','Pagado','No pagado']);
            $table->enum('estado_cita',['Cancelada', 'Pospuesta','En proceso', 'Atendida']);
            $table->dateTime('fecha_hora');
            $table->timestamps();
            
            $table->foreignId('metodoPago_id')
                ->constrained('metodospagos')
                ->onDelete('no action')
            ;

            $table->foreignId('user_mascota_id')
                ->constrained('mascotas_users')
                ->onDelete('no action')
            ;

            $table->foreignId('servicio_especialista_id')
                ->constrained('servicios_especialistas')
                ->onDelete('no action')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
