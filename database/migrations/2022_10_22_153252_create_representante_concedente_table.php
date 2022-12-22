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
        Schema::create('representante_concedente', function (Blueprint $table) {
            $table->id('id_representante_concedente');
            $table->string('nome', 100);
            $table->string('rg', 20);
            $table->string('cargo', 45);
            $table->string('email', 45);
            $table->string('telefone', 45);
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
        Schema::dropIfExists('representante_concedente');
    }
};
