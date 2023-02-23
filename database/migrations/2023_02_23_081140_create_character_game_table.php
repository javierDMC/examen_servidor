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
        Schema::create('character_game', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id')->unsigned();
            $table->unsignedBigInteger('game_id')->unsigned();
            $table->timestamps();
            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_game');
    }
};
