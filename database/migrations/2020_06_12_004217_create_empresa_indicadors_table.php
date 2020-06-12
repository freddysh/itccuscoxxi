<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaIndicadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_indicadors', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('indicador_id')->references('id')->on('indicadors');
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
        Schema::dropIfExists('empresa_indicadors');
    }
}
