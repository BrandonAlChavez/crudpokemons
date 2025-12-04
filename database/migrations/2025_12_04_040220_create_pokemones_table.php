<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pokemones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->integer('ataque');
            $table->integer('defensa');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pokemones');
    }
};
