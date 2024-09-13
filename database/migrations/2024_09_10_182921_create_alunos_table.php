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
        Schema::create('alunos', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('nome')->nullable();
            $table->integer('idade')->nullable();
            $table->string('sexo')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('email')->nullable();
            $table->string('senha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};