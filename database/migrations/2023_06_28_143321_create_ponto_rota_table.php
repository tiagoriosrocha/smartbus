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
        Schema::create('ponto_rota', function (Blueprint $table) {
            $table->unsignedBigInteger('ponto_id');
            $table->unsignedBigInteger('rota_id');
        });

        Schema::table('ponto_rota', function(Blueprint $table){
            $table->foreign('ponto_id')->references('id')->on('pontos');
            $table->foreign('rota_id')->references('id')->on('rotas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponto_rota');
    }
};
