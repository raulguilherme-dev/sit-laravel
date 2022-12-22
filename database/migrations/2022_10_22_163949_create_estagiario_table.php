<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagiario', function (Blueprint $table) {
            $table->id('id_estagiario');
            $table->string('nome', 100);
            $table->string('matricula', 20);
            $table->string('email', 45);
            $table->string('telefone', 45);
            $table->foreignId('id_curso');
            $table->foreignId('id_supervisor');
            $table->foreignId('id_orientador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagiario');
    }
};
