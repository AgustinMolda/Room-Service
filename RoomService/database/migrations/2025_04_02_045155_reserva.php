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
        Schema::create('reserva',function(Blueprint $table){
            $table->id();
            $table->string('slug')->unique();
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->integer('id_cliente');
            $table->integer('id_Habitación');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
