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
        Schema::create('responsavels', function (Blueprint $table) {
            $table->increments('Id_Responsavel');
            $table->string('Nome');
            $table->string('CPF', 14);
            $table->date('Nascimento')->nullable();
            $table->string('Telefone', 15)->nullable();
            $table->string('Endereco')->nullable();
            $table->string('CEP', 10)->nullable();
            $table->string('Estado', 2)->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Email')->nullable();
            $table->string('Senha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsavels');
    }
};
