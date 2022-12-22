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
        Schema::create('concedente', function (Blueprint $table) {
            $table->id('id_concedente');
            $table->string('nome', 100);
            $table->string('cnpj', 50);
            $table->string('razao_social', 100);
            $table->string('nome_fantasia', 100);
            $table->string('email', 100);
            $table->string('telefone', 45);
            $table->string('endereco', 100);
            $table->string('cidade', 100);
            $table->string('uf', 20);
            $table->foreignId('id_supervisor');
            $table->foreignId('id_representante_concedente');
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
        Schema::dropIfExists('concedente');
    }
};
