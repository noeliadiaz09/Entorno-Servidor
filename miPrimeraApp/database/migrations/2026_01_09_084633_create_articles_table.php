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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Columna del título. 75 caracteres como máximo
            $table->string('title', 75);
            // Columna del texto del artículo. Debe ser único
            $table->string('content')->unique();
            // Columna de la fecha de publicación
            $table->date('publish_date');
            // Columna de la categoría. Puede estar vacío
            $table->text('category')->nullable();
            // Número de visitas del artículo
            $table->integer('views');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
