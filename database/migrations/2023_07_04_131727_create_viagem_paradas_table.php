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
        Schema::create('viagem_ponto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viagem_id');
            $table->unsignedBigInteger('ponto_id');
            $table->string('status'); //ativo, inativo
            $table->string('tempo')->nullable();
            $table->string('distancia')->nullable();
            $table->timestamps();
        });

        Schema::table('viagem_ponto', function(Blueprint $table){
            $table->foreign('viagem_id')->references('id')->on('viagens');
            $table->foreign('ponto_id')->references('id')->on('pontos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viagem_paradas');
    }
};
