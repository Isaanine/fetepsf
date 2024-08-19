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
            $table->increments('RM');
            $table->string('Nome');
            $table->string('Email');
            $table->string('CPF', 14);
            $table->date('Nascimento')->nullable();
            $table->unsignedInteger('Id_Responsavel')->nullable();
            $table->foreign('Id_Responsavel')->references('Id_Responsavel')->on('responsavels');
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
