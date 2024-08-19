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
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('Id_Professor');
            $table->string('Nome');
            $table->string('CPF', 14)->unique();
            $table->date('Nascimento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('Formacao')->nullable();
            $table->string('Email')->unique();
            $table->string('Senha');
            $table->string('Foto')->nullable(); // Adiciona a coluna Foto
            $table->string('FotoBack')->nullable(); // Adiciona a coluna Foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('professores', function (Blueprint $table) {
            
            $table->dropColumn('Foto'); // Remove a coluna Foto
            $table->dropColumn('FotoBack');
        });
    }
};
