<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 100)->unique();
            $table->string('plataforma', 50);
            $table->string('genero', 50);
            $table->integer('clasificacionPegi');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videojuegos');
    }
};
