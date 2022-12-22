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
        Schema::create('estagio', function (Blueprint $table) {
            $table->id('id_estagio');
            $table->enum('turno', ['matutino', 'vespertino', 'noturno']);
            $table->string('horario', 10);
            $table->string('obrigatoriedade', 45);
            $table->integer('carga_horaria');
            $table->string('situacao', 45);
            $table->date('data_inicio');
            $table->date('data_final');
            $table->foreignId('id_supervisor');
            $table->foreignId('id_concedente');
            $table->foreignId('id_orientador');
            $table->foreignId('id_estagiario');
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
        Schema::dropIfExists('estagio');
    }
};
