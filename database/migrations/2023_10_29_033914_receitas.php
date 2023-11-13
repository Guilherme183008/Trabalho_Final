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
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');
            $table->double('tempo_preparo');
            $table->text('modo_preparo');
            $table->double('qnt_ingrediente');
            $table->double('valor');
            $table->unsignedBigInteger('ingredientes_id');
            $table->timestamps();

            $table->foreign('ingredientes_id')->references('id')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receitas');
    }
};
