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
        Schema::create('viagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rota_id');
            $table->unsignedBigInteger('motorista_id');
            $table->dateTime('hora_partida')->nullable();
            $table->dateTime('hora_chegada')->nullable();
            $table->string('status')->default('nao_iniciada'); //nao_iniciada|rodando|finalizada
            $table->timestamps();
        });

        Schema::table('viagens', function(Blueprint $table){
            $table->foreign('rota_id')->references('id')->on('rotas');
            $table->foreign('motorista_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viagens');
    }
};
