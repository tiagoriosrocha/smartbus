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
        Schema::create('user_seguindo_rota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('rota_id');
            $table->timestamps();
        });

        Schema::table('user_seguindo_rota', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rota_id')->references('id')->on('rotas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_seguindo_rota');
    }
};
