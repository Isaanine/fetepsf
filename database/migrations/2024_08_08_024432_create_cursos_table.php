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
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('Id_Curso');
            $table->string('Nome');
            $table->text('Sobre')->nullable();
            $table->time('Horario')->nullable();
            $table->string('Dias')->nullable();
            $table->unsignedInteger('Id_Professor')->nullable();
            $table->binary('Foto')->nullable();
            $table->text('Itens_Aula')->nullable();
            $table->foreign('Id_Professor')->references('Id_Professor')->on('professores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
