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
        Schema::create('passagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viagem_id');
            $table->double('latitude',10,8)->nullable();
            $table->double('longitude',10,8)->nullable();
            $table->timestamps();
        });

        Schema::table('passagens', function(Blueprint $table){
            $table->foreign('viagem_id')->references('id')->on('viagens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passagens');
    }
};
