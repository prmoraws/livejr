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
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nome');
            $table->string('celular');
            $table->string('nascimento');
            $table->string('batismo');
            $table->string('endereco');
            $table->string('e_civil');
            $table->string('profissao');
            $table->string('bairro');
            $table->string('condicao');
            $table->string('grupo');
            $table->string('foto');
            $table->string('observacao');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};
