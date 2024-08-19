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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('Id_Matricula');
            $table->string('Situacao')->nullable();
            $table->unsignedInteger('Id_Curso');
            $table->unsignedInteger('RM');
            $table->foreign('Id_Curso')->references('Id_Curso')->on('cursos');
            $table->foreign('RM')->references('RM')->on('alunos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
