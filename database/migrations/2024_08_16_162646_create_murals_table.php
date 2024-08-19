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
        Schema::create('murals', function (Blueprint $table) {
            $table->increments('Id_Mural');
            $table->string('Nome');
            $table->string('Email')->nullable();
            $table->string('Recado')->nullable();
            $table->string('Assunto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murals');
    }
};
