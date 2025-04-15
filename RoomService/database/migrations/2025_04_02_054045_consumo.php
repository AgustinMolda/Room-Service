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
        Schema::create('consumo', function(Blueprint $table){
            $table->id();
            $table->string('slug')->unique();
            $table->integer('id_consumo');
            $table->integer('id_reserva');
            $table->integer('id_servicio');
            $table->integer('Cantidad');
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumo');
    }
};
